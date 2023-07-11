INSERT INTO users (mail, mdp, is_google, name, is_admin) VALUES
('Mendrika@gmail.com', md5('azerty'), 0, 'Mendrika', 1),
('Sariaka@gmail.com', md5('azerty'), 0, 'Sariaka', 1),
('Tahiry@gmail.com', md5('azerty'), 0, 'Tahiry', 1),
('Bota@gmail.com', md5('azerty'), 0, 'Bota', 0),
('Mahia@gmail.com', md5('azerty'), 0, 'Mahia', 0);

INSERT INTO goal (image_path, title, description, status) VALUES
('', 'perte de poids', 'Notre programme vous offre une approche sur mesure pour atteindre vos objectifs de perte de poids. En plus, nos entraînements intensif sont conçus pour maximiser la combustion des graisses et accélérer votre métabolisme. Vous verrez des résultats significatifs en termes de perte de poids', -10),
('', 'prise de poids', ' Nous vous aiderons à choisir des aliments nutritifs et caloriques, tels que des sources de protéines maigres, des grains entiers, des fruits secs et des graisses saines. En adoptant une approche équilibrée, vous pourrez prendre du poids tout en préservant votre santé globale.', 10);

INSERT INTO user_detail(id_user, weight, height, age, weight_to_operate, id_goal) VALUES
(4, 90, 1.82, 25, 10, 1),
(5, 56, 1.72, 18, 8, 2);

INSERT INTO wallet(id_user, value) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0);

INSERT INTO code (code, value, is_used, status) VALUES
('  ', 5000000, 0, 0),
('987654321', 7500000, 0, 10),
('147258369', 2500000, 0, 0),
('369258147', 2000000, 0, 20),
('258369147', 4000000, 0, 0);

INSERT INTO menu(label, kcal, image_path) VALUES
('salade de poulet grillé', 275, 'poulet_grille.jpg'),
('Poisson cuit à la vapeur avec légumes', 225, 'poisson_legume.jpg'),
('Soupe aux légumes', 125, 'soupe_legume.jpg'),
('Wraps de laitue aux légumes', 125, 'wrap_legume.jpg'),
('Bol de quinoa aux légumes', 300, 'quinoa_legume.jpg'),
('Omelette aux légumes', 200, 'omelette_legume.jpg'),
('Saumon grillé avec patates douces rôties et légumes verts ', 550, 'saumon_legume.jpg'),
('Poulet aux légumes sautés et huile de sésame', 500, 'poulet_legume.jpg'),
('Pâtes complètes avec légumes grillés et crevettes', 625, 'pate_legume.jpg'),
('Lasagne à la viande', 700, 'lasagne.jpeg'),
('Poulet frit avec pommes de terre ', 825, 'poulet_ovy.jpg'),
('Assiette de nachos avec fromage fondu et guacamole', 800, 'nachos.jpg');

INSERT INTO activity(label, kcal, image_path) VALUES
('Course à pied', 590, 'course_pied.jpg'),
('Natation', 470, 'natation.jpg'),
('Vélo', 620, 'velo.jpg'),
('Zumba', 390, 'zumba.jpg'),
('Aérobic', 440, 'aerobic.jpg'),
('Tennis', 530, 'tennis.jpg'),
('Danse', 580, 'danse.jpg'),
('Yoga', 450, 'yoga.jpg');


INSERT INTO pack(id_goal, label, price, remise) VALUES
(1, '(Mince) standard', 45000, 0),
(1, '(Mince) rapide', 60000, 0),
(1, '(Mince) premium', 80000, 0),
(2, '(Muscle) standard', 45000, 0),
(2, '(Muscle) rapide', 60000, 0),
(2, '(Muscle) premium', 80000, 0);

INSERT INTO pack_user(id_pack, id_user) VALUES
(2, 4),
(6, 5);

INSERT INTO pack_menu(id_pack, id_menu) VALUES
(1, 5),
(1, 6),
(2, 1),
(2, 2),
(3, 3),
(3, 4),
(4, 7),
(4, 8),
(5, 9),
(5, 10),
(6, 11),
(6, 12);

INSERT INTO pack_activity(id_pack, id_activity) VALUES
(1, 4),
(2, 6),
(3, 3),
(3, 7),
(4, 1),
(4, 2),
(5, 8),
(6, 5);

INSERT INTO subscription VALUES 
(default,'SILVER',20000,10),
(default,'GOLD',25000,12),
(default,'DIAMOND',30000,20);