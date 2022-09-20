CREATE TABLE customers(
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
name CHAR(50) NOT NULL,
address CHAR(100) not null,
City CHAR(30) not null
);

CREATE TABLE orders( 
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
customer_id INT UNSIGNED NOT NULL,
amount FLOAT(6,2),
date DATE NOT NULL,
CONSTRAINT FK_customer_id FOREIGN KEY (customer_id) REFERENCES customers(id) 
);

CREATE TABLE books( 
isbn CHAR(13) NOT NULL PRIMARY KEY,
author CHAR(50),
title CHAR(100),
price FLOAT(4,2)
);

CREATE TABLE order_items( 
id INT UNSIGNED NOT NULL,
isbn CHAR(13) NOT NULL,
order_id INT UNSIGNED NOT NULL,
quantity TINYINT UNSIGNED,
PRIMARY KEY (id, isbn),
CONSTRAINT FK_order_id FOREIGN KEY (order_id) REFERENCES orders(id),
CONSTRAINT FK_isbn FOREIGN KEY (isbn) REFERENCES books(isbn)
);


CREATE TABLE book_reviews(
isbn CHAR(13) NOT NULL PRIMARY KEY,
review TEXT,
CONSTRAINT FK_review_isbn FOREIGN KEY (isbn) REFERENCES books(isbn)
);


INSERT INTO customers (name, address, City) VALUES
('Julie Smith', '25 Oak Street', 'Airport West'),
('Alan Wong', '1/47 Haines Avenue', 'Box Hill'),
('Michelle Arthur', '357 North Road', 'Yarraville');


INSERT INTO books (isbn, author, title, price) VALUES
('0-672-31697-8', 'Michael Morgan','Java 2 for Professional Developers', 34.99),
('0-672-31745-1', 'Thomas Down', 'Installing Debian GNU/Linux', 24.99),
('0-672-31509-2', 'Pruitt, et al.', 'Teach Yourself GIMP in 24 Hours', 24.99),
('0-672-31769-9', 'Thomas Schenk', 'Caldera OpenLinux System Administration Unleashed', 49.99);

INSERT INTO orders (customer_id, amount, date) VALUES
(3, 69.98, '2007-04-02'),
(1, 49.99, '2007-04-15'),
(2, 74.98, '2007-04-19'),
(3, 24.99, '2007-05-01');

INSERT INTO book_reviews (isbn, review) VALUES
('0-672-31697-8', 'The Morgan book is clearly written and goes well beyond most of the basic Java books out there.');