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
    user_id int not null,
    order_date date not null,
    total_price double (7,2),
    order_time time not null,
    fname varchar(60) not null,
    lname varchar(60) not null,
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

CREATE TABLE order_info(
    order_info_id int AUTO_INCREMENT not null,
    order_id int not null,
    product_id int not null,
    PRIMARY KEY(order_info_id)
);

ALTER TABLE `orders` ADD INDEX(`user_id`);
ALTER TABLE `orders` ADD FOREIGN KEY (user_id) REFERENCES `users`(user_id);
ALTER TABLE `products` ADD INDEX(`category_id`);
ALTER TABLE `products` ADD FOREIGN KEY (`category_id`) REFERENCES `categories`(category_id);
ALTER TABLE `order_info` ADD INDEX(`order_id`);
ALTER TABLE `order_info` ADD FOREIGN KEY (`order_id`) REFERENCES `orders`(order_id);
ALTER TABLE `order_info` ADD INDEX(`product_id`);
ALTER TABLE `order_info` ADD FOREIGN KEY (`product_id`) REFERENCES `products`(product_id);
  
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
('COVID-19', 'COVID-19 to choroba wirusowa wywołana przez infekcję SARS-CoV-2. Można na nią zachorować w wyniku kontaktu z osobą zainfekowaną. Objawy kliniczne COVID-19 są różnorodne i mogą obejmować m.in.: kaszel, katar, gorączkę lub uczucie zmęczenia. Jeśli źle się czujesz i występują u Ciebie którekolwiek z poniższych objawów, wykonaj test, bez względu na ich początkowe nasilenie. Jeśli wynik testu będzie pozytywny, powinieneś skontaktować się z lekarzem, aby porozmawiać o możliwych opcjach leczenia. Jest to istotne w przypadku pacjentów z grupy wysokiego ryzyka rozwoju ciężkiej postaci COVID-19. Razem z lekarzem możecie ustalić, jakie postępowanie terapeutyczne jest dla Ciebie odpowiednie.', 'pictures/covid.jpg', 'main'),
('Nasza historia','Historia Dob-Med to historia innowacji, która rozpoczęła się w połowie XIX wieku w Zbuczynie, gdzie powstało przedsiębiorstwo chemiczne założone przez dwóch Polaków żydowskiego pochodzenia - Marcina Dobeckiego i Mateusza Kirikowskiego. Historia naszej firmy łączy się z jednym z przełomowych odkryć medycznych w obszarze chorób zakaźnych, a nasze antybiotyki zmieniły bieg historii.', 'pictures/historia.jpg', 'onas'),
('Współpraca z organizacjami','Ważnym celem naszej działalności jest dostarczanie innowacyjnych terapii oraz leków, które realnie wpływają na poprawę zdrowia i ratowanie życia pacjentów. Poza dostarczaniem innowacyjnych rozwiązań terapeutycznych dbamy także o udostępnianie rzetelnej informacji medycznej oraz wspieramy wartościowe inicjatywy, których celem jest edukacja, budowanie świadomości prozdrowotnej oraz zwrócenie uwagi na potrzeby pacjentów i ich bliskich.', 'pictures/wspolpraca.jpg', 'main'),
('Naszą siłą są ludzie','Od lat inwestujemy w kapitał intelektualny, zatrudniając najwyższej klasy specjalistów posiadających różnorodne kwalifikacje i doświadczenie. Jesteśmy dumni z rozwijających się w Polsce Międzynarodowych Centrów Kompetencji Dob-Med. We wszystkich naszych placówkach w Polsce jest zatrudnionych około 270 wybitnych specjalistów, są one swego rodzaju kuźnią talentów - młodzi, zdolni i wykształceni ludzie zajmują miejsca pracy w naszej firmie.', 'pictures/naukowcy.jpg', 'onas');


INSERT INTO users(email, password, user_type) VALUES
('AdiSwiczan123@gmail.com', '$2a$04$/.oGgvX6I4vrjoDULvYUVOLMZgmHVuxrdnspa4mFILebWeMHGxn0q', 'admin'),
('BernadetaMaska12@gmail.com', '$2a$04$gHUJBnrY8erI/Xb1PM6XaOiD9xrxNEI1.uC5iUw6FW50pr6vFf11y', 'noob');
