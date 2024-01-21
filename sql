INSERT INTO users (username, pwd, email) VALUES ('Krossing', 'dani123','johndoe@gmail.com');

UPDATE users SET username = 'coolBasse', pwd = 'basse456' WHERE id = 2

DELETE FROM users WHERE id = 1;

SELECT username, email FROM users WHERE id = 3;

SELECT username, comment_text FROM comments WHERE users_id = 3;

SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;