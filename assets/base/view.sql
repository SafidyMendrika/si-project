create or replace view v_list_pack as 
(select pack.id_pack,pack.id_goal,pack.label, pack.price , pack.remise,pack_menu.id_pack_menu,pack_menu.id_menu,pack_activity.id_activity,pack_activity.id_pack_activity,menu.label as menu, menu.kcal as menukcal,activity.label as activity,activity.kcal as activitykcal from pack 
join pack_menu on pack.id_pack=pack_menu.id_pack 
join menu on pack_menu.id_menu=menu.id_menu
join pack_activity on pack.id_pack=pack_activity.id_pack
join activity on pack_activity.id_activity=activity.id_activity
);

-- create or replace view v_list_pack_complet as
-- ( select v_list_pack.id_pack, v_list_pack.label, v_list_pack.id_menu, v_list_pack.menu, v_list_pack.menukcal, v_list_pack.id_activity, v_list_pack.activity, v_list_pack.activitykcal, user_detail.weight_to_operate 
-- from v_list_pack 
-- join user_detail on v_list_pack.id_goal = user_detail.id_goal
-- );

create or replace view v_list_menu_par_pack as
(select v_list_pack.id_pack, v_list_pack.id_menu, v_list_pack.menu, v_list_pack.menukcal, v_list_pack.price, v_list_pack. from v_list_pack
);

create or replace view v_list_activity_par_pack as
(select v_list_pack.id_pack, v_list_pack.id_activity, v_list_pack.activity, v_list_pack.activitykcal from v_list_pack
);