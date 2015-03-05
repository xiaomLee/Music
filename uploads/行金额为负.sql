
select 'EXP_REPORT' doc_type,
       '费用报销' doc_type_name,
       h.exp_report_header_id document_id,
       h.exp_report_number document_num,
       h.employee_id,
       (select e.employee_code || '-' || e.name
          from exp_employees e
         where e.employee_id = h.employee_id) employee_name,
       to_char(onl_doc_info_pkg.get_doc_submit_time('EXP_REPORT',
                                            h.exp_report_header_id),'yyyy-mm-dd hh24:mi:ss') submit_time,
       onl_doc_info_pkg.get_doc_pay_flag('EXP_REPORT',h.exp_report_header_id) pay_flag,
       (select sum(el.report_amount)
          from exp_report_lines el
         where el.exp_report_header_id = h.exp_report_header_id) doc_amount,
       h.description head_desc,
       l.exp_report_line_id,
       l.report_amount line_amount,
       l.expense_item_id,
       (select i.description
          from exp_expense_items_vl i
         where i.expense_item_id = l.expense_item_id) expense_item_name,
       l.unit_id,
       (select u.DESCRIPTION
          from exp_org_unit_vl u
         where u.UNIT_ID = l.unit_id) unit_name,
       l.dimension7_id,
       (select d.description
          from fnd_dimension_values_vl d
         where d.dimension_value_id = l.dimension7_id) project_name,
       l.dimension2_id,
       (select d.description
          from fnd_dimension_values_vl d
         where d.dimension_value_id = l.dimension2_id) dim2_name,
       l.description line_desc
  from exp_report_headers h, 
       exp_report_lines l
 where h.exp_report_header_id = l.exp_report_header_id
   and  l.report_amount<0

union all

select 'PAYMENT_REQUISITION' doc_type,
       '借款申请' doc_type_name,
       h.payment_requisition_header_id,
       h.requisition_number,
       h.employee_id,
       (select e.employee_code || '-' || e.name
          from exp_employees e
         where e.employee_id = h.employee_id) employee_name,
       to_char(onl_doc_info_pkg.get_doc_submit_time('PAYMENT_REQUISITION',
                                            h.payment_requisition_header_id),'yyyy-mm-dd hh24:mi:ss') submit_time,
       onl_doc_info_pkg.get_doc_pay_flag('PAYMENT_REQUISITION',h.payment_requisition_header_id) pay_flag,
       (select sum(el.onl_amount)
          from onl_csh_payment_req_line el
         where el.payment_requisition_header_id =
               h.payment_requisition_header_id) doc_amount,
       h.description head_desc,
       l.onl_req_line_id,
       l.onl_amount line_amount,
       l.onl_req_item_id,
       (select i.description
          from exp_req_items_vl i
         where i.req_item_id = l.onl_req_item_id) expense_item_name,
       l.onl_unit_id,
       (select u.DESCRIPTION
          from exp_org_unit_vl u
         where u.UNIT_ID = l.onl_unit_id) unit_name,
       l.onl_dim7_id,
       (select d.description
          from fnd_dimension_values_vl d
         where d.dimension_value_id = l.onl_dim7_id) project_name,
       l.onl_dim2_id,
       (select d.description
          from fnd_dimension_values_vl d
         where d.dimension_value_id = l.onl_dim2_id) dim2_name,
       l.onl_line_desc line_desc
  from csh_payment_requisition_hds h, 
       onl_csh_payment_req_line l
 where h.payment_requisition_header_id = l.payment_requisition_header_id
   and l.onl_amount<0
   
union all

select 'ONL_VEN_PAY' doc_type,
       '供应商付款' doc_type_name,
       h.pay_req_head_id,
       h.pay_req_number,
       h.employee_id,
       (select e.employee_code || '-' || e.name
          from exp_employees e
         where e.employee_id = h.employee_id) employee_name,
       to_char(onl_doc_info_pkg.get_doc_submit_time('ONL_VEN_PAY',
                                            h.pay_req_head_id),'yyyy-mm-dd hh24:mi:ss') submit_time,
       onl_doc_info_pkg.get_doc_pay_flag('ONL_VEN_PAY',h.pay_req_head_id) pay_flag,
       (select sum(el.amount)
          from onl_pay_req_lns el
         where el.pay_req_head_id = h.pay_req_head_id) doc_amount,
       h.description head_desc,
       l.pay_req_line_id,
       l.amount line_amount,
       l.reimb_item_id,
       (select i.description
          from onl_ven_reimb_item_vl i
         where i.reimb_item_id = l.reimb_item_id) expense_item_name,
       l.unit_id,
       (select u.DESCRIPTION
          from exp_org_unit_vl u
         where u.UNIT_ID = l.unit_id) unit_name,
       l.dimension7_id,
       (select d.description
          from fnd_dimension_values_vl d
         where d.dimension_value_id = l.dimension7_id) project_name,
       l.dimension2_id,
       (select d.description
          from fnd_dimension_values_vl d
         where d.dimension_value_id = l.dimension2_id) dim2_name,
       l.line_description line_desc
  from onl_pay_req_head h, 
       onl_pay_req_lns l
 where h.pay_req_head_id = l.pay_req_head_id
  and l.amount<0

union all

select 'ONL_VEN_RECT' doc_type,
       '供应商报账' doc_type_name,
       h.rect_req_head_id,
       h.rect_req_number,
       h.employee_id,
       (select e.employee_code || '-' || e.name
          from exp_employees e
         where e.employee_id = h.employee_id) employee_name,
       to_char(onl_doc_info_pkg.get_doc_submit_time('ONL_VEN_RECT',
                                            h.rect_req_head_id),'yyyy-mm-dd hh24:mi:ss') submit_time,
       onl_doc_info_pkg.get_doc_pay_flag('ONL_VEN_RECT',h.rect_req_head_id) pay_flag,
       (select sum(el.amount)
          from onl_rect_req_lns el
         where el.rect_req_head_id = h.rect_req_head_id) doc_amount,
       h.description head_desc,
       l.rect_req_line_id,
       l.amount line_amount,
       l.reimb_item_id,
       (select i.description
          from onl_ven_reimb_item_vl i
         where i.reimb_item_id = l.reimb_item_id) expense_item_name,
       l.unit_id,
       (select u.DESCRIPTION
          from exp_org_unit_vl u
         where u.UNIT_ID = l.unit_id) unit_name,
       l.dimension7_id,
       (select d.description
          from fnd_dimension_values_vl d
         where d.dimension_value_id = l.dimension7_id) project_name,
       l.dimension2_id,
       (select d.description
          from fnd_dimension_values_vl d
         where d.dimension_value_id = l.dimension2_id) dim2_name,
       l.line_description line_desc
  from onl_rect_req_head h, 
       onl_rect_req_lns l
 where h.rect_req_head_id = l.rect_req_head_id
   and l.amount<0
   
