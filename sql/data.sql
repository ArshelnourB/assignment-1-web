CREATE TABLE student (
    studentId int not null auto_increment,
    fname varchar(255) NOT NULL,
    lname varchar(255) NOT NULL,
    phone varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    dateOfBirth date NOT NULL,
    schoolYear varchar(255) NOT NULL,
    course varchar(255) NOT NULL,
    overallGrade int(3) NOT NULL,
    primary key (studentId)
);

INSERT into student(fname, lname, phone, email, dateOfBirth, schoolYear, course, overallGrade)
VALUES
    ('Quandale', 'Dingle', '1-800-QUANDALE', 'q_dingle111@yahoo.ca', '2021-09-21', 'Fifth', 'Music'),
    ('Johnson', 'Smith', '705-629-1495', 'meallalong_1@gmail.com', '1996-04-01', 'First', 'Criminology'),
    ('Benedict', 'Cumberbatch', '562-847-0902', 'strAnge-Th1nGs713@facebook.com', '1976-07-19', 'Third', 'Sorcery'),
    ('Bugs', 'Bunny', '818-954-2577', 'what_up_doc@gmail.com', '1938-04-30', 'Second', 'Accounting'),
    ('Darth', 'Vader', '415-623-1962', 'publicrelations@lucasfilm.com', '1981-04-19', 'Fourth', 'Sith Financing');