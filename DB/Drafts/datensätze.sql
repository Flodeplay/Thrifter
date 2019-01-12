INSERT INTO u_users (u_username, u_email, u_pwd, u_surname, u_forename, u_birthdate, u_zipcode, u_image, u_phonenumber, u_description) VALUES ('admin', 'manu.koellner@aon.at', '7ed8c2c790aa83d6c3e404b5368f6832c18d46a0e98b9c7a7a5e3ef823e2c9f0e310abbf6f7ea9d9d883ccb64ec2736a', 'Koellner', 'Manuel', NOW(), '1200', 'defaultUser.png', '+436763084990', 'das bin ich');

INSERT INTO b_brands (b_name) VALUES ('Nike');
INSERT INTO ca_categories (ca_name) VALUES ('Hoodie');
INSERT INTO ca_categories (ca_name) VALUES ('T-Shirt');
INSERT INTO col_colors (col_name) VALUES ('Schwarz');
INSERT INTO con_conditions (con_description) VALUES ('Wie neu');
INSERT INTO g_genders (g_name) VALUES ('Herren');
INSERT INTO s_sizes (s_unittype, s_value, s_g_genders) VALUES ('EU', 'M', 1);
INSERT INTO sca_sizecategories (s_sizes_s_id, ca_categories_ca_id) VALUES (1, 2);

INSERT INTO p_post (p_title, p_price, p_image, p_description, p_u_user, p_col_color, p_b_brand, p_g_gender, p_con_condition, p_ca_category, p_s_size)
VALUES ('Hoodie', 30000, '1.png', 'Hier ist die Beschreibung!', 1, 1, 1, 1, 1, 1, 1);
INSERT INTO p_post (p_title, p_price, p_image, p_description, p_u_user, p_col_color, p_b_brand, p_g_gender, p_con_condition, p_ca_category, p_s_size)
VALUES ('T-Shirt', 20, '2.png', 'Hier ist die Beschreibung!', 1, 1, 1, 1, 1, 1, 1);

INSERT INTO f_favorites (f_u_user, f_p_post) VALUES (1,1);