-  https://www.cnblogs.com/itdragon/p/8146439.html


- http://blog.itpub.net/29863023/viewspace-2284069/
- https://blog.csdn.net/levi_work/article/details/52503004
- https://bbs.csdn.net/topics/392138542?list=lz

## left join 
- left join count 优化
- 尽量把limit往前提，让其连接的驱动表记录变少
 select  xsy_or.order_id , xsy_or.id , xsy_or.order_match_opportunity , xsy_or.order_rsync_status , xsy_or.order_confirm_status , xsy_or.order_confirm_time , xsy_or.xsy_customer_id , xsy_or.xsy_opportunity_id , xsy_o.xsy_opportunity_name , xsy_c.xsy_customer_name , cp_m.email , cpv4_o.pay_price , cpv4_o.total_price , cpv4_o.order_code , cpv4_o.meal_flag , cpv4_o.product_flag , cpv4_o.plan_id , cpv4_o.buy_time , cpv4_o.payment_mode , cpv4_o.pay_time , cpv4_o.pay_type , cpv4_o.pay_off_price , cpv4_o.discount_act_id , cpv4_o.status , cpv4_o.order_start_time , cpv4_o.order_end_time , cpv4_o.remark , cpv4_o.created_at , cpv4_o.try_delay_num , cpv4_o.member_id , cpv4_o.sale_user_ids , cpv4_o.sales_performance , cpv4_o.sales_commission , cpv4_o.company_performance , cpv4_o.buy_type 
 from  (select * from yundun_cos.xsy_crm_yd_order_relation order by order_id desc limit 20,20) as xsy_or 
 left join yundun_cp_v4.cpv4_order as cpv4_o on xsy_or.order_id = cpv4_o.id
 left join yundun_cos.xsy_crm_opportunity as xsy_o on xsy_or.xsy_opportunity_id = xsy_o.xsy_opportunity_id
 left join yundun_cos.xsy_crm_customer as xsy_c on xsy_or.xsy_customer_id = xsy_c.xsy_customer_id
 left join yundun_cp.member as cp_m on cpv4_o.member_id = cp_m.id