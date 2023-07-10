create or replace view v_list_pack as 
(select pack.id_pack,pack.label, pack.price , pack.remise,pack_menu.id_pack_menu,pack_menu.id_menu,pack_activity.id_activity,pack_activity.id_pack_activity,menu.label as menu, menu.kcal as menukcal,activity.label as activity,activity.kcal as activitykcal from pack 
join pack_menu on pack.id_pack=pack_menu.id_pack 
join menu on pack_menu.id_menu=menu.id_menu
join pack_activity on pack.id_pack=pack_activity.id_pack
join activity on pack_activity.id_activity=activity.id_activity
);