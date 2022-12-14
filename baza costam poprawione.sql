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
('Pigu??y', 'Bardzo smaczne'),
('Syropy', 'Wock'),
('Narkotyki', 'Ale legalne'),
('Antybiotyki', 'Pokonaj?? ka??dego wirusa'),
('Suplementy', 'Na codziennie dbanie o zdr??wko');

INSERT INTO products(product_name, price, category_id, image, description) VALUES
('Pigula 3002', 20, 1, 'pictures/pigula3002.jpg','Idealne na b??l g??owy, szybko i skutecznie zwalczaj?? silne b??le spowodowane nawet zmian?? ci??nienia!'),
('Bernadrill', 70, 3, 'pictures/bernadrill.jpg','Coraz bardziej popularny lek bez recepty, dobrze sprawdza si?? w przypadku kaszlu nie tylko suchego, ale r??wnie?? mokrego.'),
('Ohio', 60, 3, 'pictures/ohio.jpg','Ohio'),
('The Zbuczyn Special', 50, 3, 'pictures/special.jpg','Killer'),
('Polski Lean', 150, 2, 'pictures/polski lean.jpg','Smako??yki'),
('Neptunki', 34.99, 5, 'pictures/neptunki.jpg','Witaminy dla dzieci'),
('Antibioticos Banditos', 79.99, 4,'pictures/antibioticos banditos.jpg','Na ci????kie batelie z chorob??'),
('Rumianek', 199.99, 3, 'pictures/rumianek.jpg', 'Coby si?? cz??owiek uspokoi??'),
('Sza??wia', 134.99, 3, 'pictures/szalwia.jpg', 'Idealna do robienia z niej napar??w. Pomga na problemy z potem, ??o????dkiem a nawet z cukrzyc??!'),
('Novoscorbin', 49.99, 1, 'pictures/novoscorbin.jpg', 'Witaminki dla ka??dego'),
('Syrop 2077', 59.99, 2, 'pictures/syrop2077.jpg', 'Do sprite'),
('Lisak', 9.99, 5, 'pictures/lisak.jpg','Na garde??ko wporzo'),
('Sok z gumijerzyn', 29.99, 2, 'pictures/sok.jpg', 'No??nie wyciskany'),
('Kocio??ex', 42.01, 4, 'pictures/koxiolex.jpg', 'Leczy uzale??nienia'),
('Zuplement', 349.11, 5, 'pictures/zuplement.jpg', 'Nadaje si?? do stosowania codziennie u doros??ych, nieodpowiedni dla dzieci.');

INSERT INTO posts (title, text, image, type) VALUES
('COVID-19', 'COVID-19 to choroba wirusowa wywo??ana przez infekcj?? SARS-CoV-2. Mo??na na ni?? zachorowa?? w wyniku kontaktu z osob?? zainfekowan??. Objawy kliniczne COVID-19 s?? r????norodne i mog?? obejmowa?? m.in.: kaszel, katar, gor??czk?? lub uczucie zm??czenia. Je??li ??le si?? czujesz i wyst??puj?? u Ciebie kt??rekolwiek z poni??szych objaw??w, wykonaj test, bez wzgl??du na ich pocz??tkowe nasilenie. Je??li wynik testu b??dzie pozytywny, powiniene?? skontaktowa?? si?? z lekarzem, aby porozmawia?? o mo??liwych opcjach leczenia. Jest to istotne w przypadku pacjent??w z grupy wysokiego ryzyka rozwoju ci????kiej postaci COVID-19. Razem z lekarzem mo??ecie ustali??, jakie post??powanie terapeutyczne jest dla Ciebie odpowiednie.', 'pictures/covid.jpg', 'main'),
('Nasza historia','Historia Dob-Med to historia innowacji, kt??ra rozpocz????a si?? w po??owie XIX wieku w Zbuczynie, gdzie powsta??o przedsi??biorstwo chemiczne za??o??one przez dw??ch Polak??w ??ydowskiego pochodzenia - Marcina Dobeckiego i Mateusza Kirikowskiego. Historia naszej firmy ????czy si?? z jednym z prze??omowych odkry?? medycznych w obszarze chor??b zaka??nych, a nasze antybiotyki zmieni??y bieg historii.', 'pictures/historia.jpg', 'onas'),
('Wsp????praca z organizacjami','Wa??nym celem naszej dzia??alno??ci jest dostarczanie innowacyjnych terapii oraz lek??w, kt??re realnie wp??ywaj?? na popraw?? zdrowia i ratowanie ??ycia pacjent??w. Poza dostarczaniem innowacyjnych rozwi??za?? terapeutycznych dbamy tak??e o udost??pnianie rzetelnej informacji medycznej oraz wspieramy warto??ciowe inicjatywy, kt??rych celem jest edukacja, budowanie ??wiadomo??ci prozdrowotnej oraz zwr??cenie uwagi na potrzeby pacjent??w i ich bliskich.', 'pictures/wspolpraca.jpg', 'main'),
('Nasz?? si???? s?? ludzie','Od lat inwestujemy w kapita?? intelektualny, zatrudniaj??c najwy??szej klasy specjalist??w posiadaj??cych r????norodne kwalifikacje i do??wiadczenie. Jeste??my dumni z rozwijaj??cych si?? w Polsce Mi??dzynarodowych Centr??w Kompetencji Dob-Med. We wszystkich naszych plac??wkach w Polsce jest zatrudnionych oko??o 270 wybitnych specjalist??w, s?? one swego rodzaju ku??ni?? talent??w - m??odzi, zdolni i wykszta??ceni ludzie zajmuj?? miejsca pracy w naszej firmie.', 'pictures/naukowcy.jpg', 'onas');


INSERT INTO users(email, password, user_type) VALUES
('AdiSwiczan123@gmail.com', '$2a$04$/.oGgvX6I4vrjoDULvYUVOLMZgmHVuxrdnspa4mFILebWeMHGxn0q', 'admin'),
('BernadetaMaska12@gmail.com', '$2a$04$gHUJBnrY8erI/Xb1PM6XaOiD9xrxNEI1.uC5iUw6FW50pr6vFf11y', 'noob');
