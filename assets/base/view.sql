create or replace view v_list_pack as 
(select pack.id_pack,pack.id_goal,pack.label, pack.price , pack.remise,pack_menu.id_pack_menu,pack_menu.id_menu,pack_activity.id_activity,pack_activity.id_pack_activity,menu.label as menu, menu.kcal as menukcal,activity.label as activity,activity.kcal as activitykcal from pack 
join pack_menu on pack.id_pack=pack_menu.id_pack 
join menu on pack_menu.id_menu=menu.id_menu
join pack_activity on pack.id_pack=pack_activity.id_pack
join activity on pack_activity.id_activity=activity.id_activity
);

create or replace view v_list_pack_complet as
( select v_list_pack.id_pack, v_list_pack.label, v_list_pack.id_menu, v_list_pack.menu, v_list_pack.menukcal, v_list_pack.id_activity, v_list_pack.activity, v_list_pack.activitykcal, user_detail.weight_to_operate , v_list_pack.price
from v_list_pack 
join user_detail on v_list_pack.id_goal = user_detail.id_goal
);

create or replace view v_list_menu_par_pack as
(select id_pack, id_menu, menu, menukcal, price, weight_to_operate from v_list_pack_complet
);

create or replace view v_list_activity_par_pack as
(select id_pack, id_activity, activity, activitykcal from v_list_pack_complet
);

create or replace view v_info_user as
(select users.id_user, users.name, users.mail, user_detail.weight, user_detail.age, user_detail.weight_to_operate, user_detail.id_goal, wallet.value as wallet from users 
join user_detail on users.id_user = user_detail.id_user
join wallet on users.id_user = wallet.id_user
);

create or replace view v_info_user_complet as
(select v_info_user.*, goal.title from v_info_user 
join goal on v_info_user.id_goal = goal.id_goal
);
