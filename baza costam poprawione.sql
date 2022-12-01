DROP DATABASE if exists shop;
CREATE database shop;
use shop;

CREATE TABLE products(
    product_id int AUTO_INCREMENT not null,
    quantity int unsigned not null,
    category_id int not null,
    price double(7,2),
    image blob not null,
    product_name varchar(60) not null,
    description varchar(250),
    PRIMARY key(product_id)
    FOREIGN key (category_id) REFERENCES categories(category_id)
    );
    
    CREATE TABLE users(
    user_id int AUTO_INCREMENT not null,
    email varchar(60) not null,
    login varchar(60) not null,
    password varchar(70) not null,
    fname varchar(60) not null,
    lname varchar(60) not null,
    user_type varchar(70) default 'noob',
    PRIMARY key(user_id)
    );
    
CREATE TABLE customers(
    customer_id int AUTO_INCREMENT not null,
    user_id int not null,
    fname varchar(60) not null,
    lname varchar(60) not null,
    town varchar(60) not null,
    address varchar(60) not null,
    PRIMARY key(customer_id)
    FOREIGN key (user_id) REFERENCES users(user_id)
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
    customer_id int not null,
    order_date date not null,
    PRIMARY key(order_id)
    FOREIGN key (product_id) REFERENCES products(product_id)
    FOREIGN key (customer_id) REFERENCES customers(customer_id)
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
        text blob(1000) not null,
        title varchar(500) not null,
        name varchar(70) not null,
        surname varchar(70) not null,
        email varchar(70) not null,
        PRIMARY KEY(contact_id)
    );
  
INSERT INTO categories(category_name, description) VALUES
('Piguły', 'Bardzo smaczne'),
('Syropy', 'Wock'),
('Narkotyki', 'Ale legalne'),
('Antybiotyki', 'Pokonają każdego wirusa'),
('Suplementy', 'Na codziennie dbanie o zdrówko');

INSERT INTO products(product_name, price, quantity, category_id, image, description) VALUES
('Pigula 3002', 20, 10, 1, 'pictures/pigula3002.jpg','Idealne na ból głowy, szybko i skutecznie zwalczają silne bóle spowodowane nawet zmianą ciśnienia!'),
('Bernadrill', 70, 30, 3, 'pictures/bernadrill.jpg','Coraz bardziej popularny lek bez recepty, dobrze sprawdza się w przypadku kaszlu nie tylko suchego, ale również mokrego.'),
('Ohio', 60, 30, 3, 'pictures/ohio.jpg','Ohio'),
('The Zbuczyn Special', 50, 5, 3, 'pictures/special.jpg','Killer'),
('Polski Lean', 150, 20, 2, 'pictures/polski lean.jpg','Smakołyki'),
('Neptunki', 34.99, 99, 5, 'pictures/neptunki.jpg','Witaminy dla dzieci'),
('Antibioticos Banditos', 79.99, 25, 4,'pictures/antibioticos banditos.jpg','Na ciężkie batelie z chorobą'),
('Rumianek', 199.99, 200, 3, 'pictures/rumianek.jpg', 'Coby się człowiek uspokoił'),
('Szałwia', 134.99, 100, 3, 'pictures/szalwia.jpg', 'Idealna do robienia z niej naparów. Pomga na problemy z potem, żołądkiem a nawet z cukrzycą!'),
('Novoscorbin', 49.99, 15, 1, 'pictures/novoscorbin.jpg', 'Witaminki dla każdego'),
('Syrop 2077', 59.99, 20, 2, 'pictures/syrop2077.jpg', 'Do sprite'),
('Lisak', 9.99, 220, 5, 'pictures/lisak.jpg','Na gardełko wporzo'),
('Sok z gumijerzyn', 29.99, 15, 2, 'pictures/sok.jpg', 'Nożnie wyciskany'),
('Kociołex', 42.01, 19, 4, 'pictures/koxiolex.jpg', 'Leczy uzależnienia'),
('Zuplement', 349.11, 3, 5, 'pictures/zuplement.jpg', 'Nadaje się do stosowania codziennie u dorosłych, nieodpowiedni dla dzieci.');

INSERT INTO customers (fname, lname, town, address, user_id) VALUES
('Dawid', 'Tchorzewski', 'Zbuczyn', 'Ulica 66', 1),
('Michał', 'Wisniewski', 'Lukow', 'Ulica 55', 2),
('Domińk', 'Mlonek', 'Sokołów Podlaski' ,'Ulica 44', 3),
('AdrJan', 'Siwek', 'Sopot', 'Łosicka 1',4),
('Lila', 'Jacht', 'Gdańsk', 'Wock 2', 5);

INSERT INTO users (email, password) VALUES
('dt1@m.pl','Dawid1'),
('mw2@m.pl','Michal2'),
('dm3@m.pl','Domink3'),
('as4@m.pl','Adrjan4'),
('lj5@m.pl','Lila5')
;

INSERT INTO posts (title, text, image, type) VALUES
('post1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pictures/produkt1.jpg', 'main'),
('post2','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pictures/produkt1.jpg', 'onas'),
('post3','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pictures/produkt1.jpg', 'main'),
('post4','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pictures/produkt1.jpg', 'onas');
