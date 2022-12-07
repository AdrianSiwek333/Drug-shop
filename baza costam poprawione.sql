DROP DATABASE if exists shop;
CREATE database shop;
use shop;

CREATE TABLE products(
    product_id int AUTO_INCREMENT not null,
    category_id int not null,
    price double(7,2),
    image blob not null,
    product_name varchar(60) not null,
    description varchar(250),
    PRIMARY key(product_id)
    );
    
    CREATE TABLE users(
    user_id int AUTO_INCREMENT not null,
    email varchar(60) not null,
    password varchar(70) not null,
    user_type varchar(70) default 'noob',
    PRIMARY key(user_id)
    );
    
CREATE TABLE categories(
    category_id int AUTO_INCREMENT not null,
    category_name varchar(60) not null,
    description varchar(60),
    PRIMARY key(category_id)
    );

CREATE TABLE orders(
    order_id int AUTO_INCREMENT not null,
    product_id int not null,
    user_id int not null,
    order_date date not null,
    PRIMARY key(order_id)
    );

CREATE TABLE posts(
    post_id int AUTO_INCREMENT not null,
    text text(1000) not null,
    image blob not null,
    title varchar(500) not null,
    type varchar(70) not null,
    PRIMARY KEY(post_id)
    );

CREATE TABLE contact(
    contact_id int AUTO_INCREMENT not null,
    text text(1000) not null,
    title varchar(500) not null,
    name varchar(70) not null,
    surname varchar(70) not null,
    email varchar(70) not null,
    PRIMARY KEY(contact_id)
    );

CREATE TABLE invoice(
    invoice_id int AUTO_INCREMENT not null,
    order_id int not null,
    user_id int not null,
    total_price double (7,2),
    fname varchar(60) not null,
    lname varchar(60) not null,
    town varchar(60) not null, 
    address varchar(60) not null,
    PRIMARY KEY(invoice_id)
);

ALTER TABLE `orders` ADD INDEX(`user_id`);
ALTER TABLE `orders` ADD FOREIGN KEY (user_id) REFERENCES `users`(user_id);
ALTER TABLE `orders` ADD INDEX(`product_id`);
ALTER TABLE `orders` ADD FOREIGN KEY (user_id) REFERENCES `products`(product_id);
ALTER TABLE `products` ADD INDEX(`category_id`);
ALTER TABLE `products` ADD FOREIGN KEY (`category_id`) REFERENCES `categories`(category_id);
ALTER TABLE `invoice` ADD INDEX(`order_id`);
ALTER TABLE `invoice` ADD FOREIGN KEY (`order_id`) REFERENCES `orders`(order_id);
ALTER TABLE `invoice` ADD INDEX(`user_id`);
ALTER TABLE `invoice` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(user_id);
  
INSERT INTO categories(category_name, description) VALUES
('Piguły', 'Bardzo smaczne'),
('Syropy', 'Wock'),
('Narkotyki', 'Ale legalne'),
('Antybiotyki', 'Pokonają każdego wirusa'),
('Suplementy', 'Na codziennie dbanie o zdrówko');

INSERT INTO products(product_name, price, category_id, image, description) VALUES
('Pigula 3002', 20, 1, 'pictures/pigula3002.jpg','Idealne na ból głowy, szybko i skutecznie zwalczają silne bóle spowodowane nawet zmianą ciśnienia!'),
('Bernadrill', 70, 3, 'pictures/bernadrill.jpg','Coraz bardziej popularny lek bez recepty, dobrze sprawdza się w przypadku kaszlu nie tylko suchego, ale również mokrego.'),
('Ohio', 60, 3, 'pictures/ohio.jpg','Ohio'),
('The Zbuczyn Special', 50, 3, 'pictures/special.jpg','Killer'),
('Polski Lean', 150, 2, 'pictures/polski lean.jpg','Smakołyki'),
('Neptunki', 34.99, 5, 'pictures/neptunki.jpg','Witaminy dla dzieci'),
('Antibioticos Banditos', 79.99, 4,'pictures/antibioticos banditos.jpg','Na ciężkie batelie z chorobą'),
('Rumianek', 199.99, 3, 'pictures/rumianek.jpg', 'Coby się człowiek uspokoił'),
('Szałwia', 134.99, 3, 'pictures/szalwia.jpg', 'Idealna do robienia z niej naparów. Pomga na problemy z potem, żołądkiem a nawet z cukrzycą!'),
('Novoscorbin', 49.99, 1, 'pictures/novoscorbin.jpg', 'Witaminki dla każdego'),
('Syrop 2077', 59.99, 2, 'pictures/syrop2077.jpg', 'Do sprite'),
('Lisak', 9.99, 5, 'pictures/lisak.jpg','Na gardełko wporzo'),
('Sok z gumijerzyn', 29.99, 2, 'pictures/sok.jpg', 'Nożnie wyciskany'),
('Kociołex', 42.01, 4, 'pictures/koxiolex.jpg', 'Leczy uzależnienia'),
('Zuplement', 349.11, 5, 'pictures/zuplement.jpg', 'Nadaje się do stosowania codziennie u dorosłych, nieodpowiedni dla dzieci.');


INSERT INTO posts (title, text, image, type) VALUES
('post1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pictures/produkt1.jpg', 'main'),
('post2','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pictures/produkt1.jpg', 'onas'),
('post3','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pictures/produkt1.jpg', 'main'),
('post4','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pictures/produkt1.jpg', 'onas');
