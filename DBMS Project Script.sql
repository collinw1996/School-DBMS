CREATE TABLE REGEMPLOYEE
(	Fname		VARCHAR(15)			NOT NULL,
    Lname		VARCHAR(15)			NOT NULL,
    Ssn			CHAR(9)				NOT NULL,
	Phone		VARCHAR(11)			NOT NULL,
    Address		VARCHAR(30)			NOT NULL,
    Email		VARCHAR(25)			NOT NULL,
    Salary		DECIMAL(10,2)		NOT NULL,
    PRIMARY KEY (Ssn),
    UNIQUE(Ssn));
    
CREATE TABLE TEACHER
(	Fname		VARCHAR(15)			NOT NULL,
    Lname		VARCHAR(15)			NOT NULL,
    Ssn			CHAR(9)				NOT NULL,
    Gender		CHAR(10)			NOT NULL,
    Bdate		DATE				NOT NULL,
	Phone		VARCHAR(11)			NOT NULL,
    Address		VARCHAR(30)			NOT NULL,
    Email		VARCHAR(25)			NOT NULL,
    Salary		DECIMAL(10,2)		NOT NULL,
    PRIMARY KEY (Ssn),
    UNIQUE(Ssn),
    FOREIGN KEY (courseID) REFERENCES CLASS(courseID));
    
CREATE TABLE CLASS
(	courseID	CHAR(5)		NOT NULL,
	courseName	VARCHAR(30) NOT NULL,
    PRIMARY KEY (courseID),
    UNIQUE(courseID),
    FOREIGN KEY (studentID) REFERENCES STUDENT(studentID));
    
CREATE TABLE STUDENT
(	studentID	CHAR(7)				NOT NULL,
	Fname		VARCHAR(15)			NOT NULL,
	MInit		CHAR,
    Lname		VARCHAR(15)			NOT NULL,
    Gender		CHAR(10)			NOT NULL,
    Bdate		DATE				NOT NULL,
	parentPhone	VARCHAR(11)			NOT NULL,
    Address		VARCHAR(30)			NOT NULL,
    Email		VARCHAR(25)			NOT NULL,
    PRIMARY KEY (studentID),
    UNIQUE(studentID));
    
CREATE TABLE PARENT
(	Fname		VARCHAR(15)			NOT NULL,
    Lname		VARCHAR(15)			NOT NULL,
	Phone		VARCHAR(11)			NOT NULL,
    Address		VARCHAR(30)			NOT NULL,
    Email		VARCHAR(25)			NOT NULL,
    PRIMARY KEY (Phone),
    FOREIGN KEY (studentID) REFERENCES STUDENT(studentID));
    
CREATE TABLE SYSTEMADMIN
(	ID	CHAR(7)		NOT NULL,
	Fname		VARCHAR(15)			NOT NULL,
    Lname		VARCHAR(15)			NOT NULL,
    PRIMARY KEY (ID),
    UNIQUE(ID));
    
CREATE TABLE SCHOOLDEPT
(	schoolID	CHAR(10)		NOT NULL,
    PRIMARY KEY (schoolID),
    UNIQUE(schoolID),
    FOREIGN KEY (courseID) REFERENCES CLASS(courseID),
	FOREIGN KEY (Ssn) REFERENCES TEACHER(Ssn),
    FOREIGN KEY (ID) REFERENCES SYSTEMADMIN(ID),
	FOREIGN KEY (Ssn) REFERENCES REGEMPLOYEE(Ssn));

CREATE TABLE GRADES
(	courseG		CHAR		NOT NULL,
	FOREIGN KEY (courseID) REFERENCES CLASS(courseID),
    FOREIGN KEY (studentID) REFERENCES STUDENT(studentID));

CREATE TABLE ATTENDANCE
(	attDate		DATE		NOT NULL,
    FOREIGN KEY (studentID) REFERENCES STUDENT(studentID));

CREATE TABLE VIOLATIONS
(	vioDate		DATE		NOT NULL,
	vioType		VARCHAR(20)	NOT NULL,
    FOREIGN KEY (studentID) REFERENCES STUDENT(studentID));
    
INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email)
VALUES (0576259, 'John', 'R', 'Doe', 'M', 09/13/96, 410-859-1176, '1 York Road', 'jdoe@gmail.com');

INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email)
VALUES (0426553, 'Sam', 'L', 'Deer', 'F', 04/24/97, 410-554-3575, '2 York Road', 'sdeer@gmail.com');

INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email)
VALUES (0422947, 'Paul', 'A', 'Jones', 'M', 12/03/95, 410-662-7840, '3 York Road', 'pjones@gmail.com');

INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email)
VALUES (0946321, 'Lauren', 'F', 'Smith', 'F', 06/30/96, 410-654-321, '4 York Road', 'lsmith@gmail.com');

INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email)
VALUES (0786531, 'Matt', 'T', 'Williams', 'M', 02/17/97, 410-372-6951, '5 York Road', 'mwilliams@gmail.com');



INSERT INTO PARENT(Fname, Minit, Lname, Phone, Address, Email)
VALUES ('Seamus', 'T', 'Doe', 410-859-1176, '1 York Road', 'sdoe@gmail.com');

INSERT INTO PARENT(Fname, Minit, Lname, Phone, Address, Email)
VALUES ('Lory', 'L', 'Deer', 410-554-3575, '2 York Road', 'ldeer@gmail.com');

INSERT INTO PARENT(Fname, Minit, Lname, Phone, Address, Email)
VALUES ('Stan', 'K', 'Jones', 410-662-7840, '3 York Road', 'sjones@gmail.com');

INSERT INTO PARENT(Fname, Minit, Lname, Phone, Address, Email)
VALUES ('Nick', 'M', 'Smith', 410-654-321, '4 York Road', 'nsmith@gmail.com');

INSERT INTO PARENT(Fname, Minit, Lname, Phone, Address, Email)
VALUES ('Debbie', 'A', 'Williams', 410-372-6951, '5 York Road', 'dwilliams@gmail.com');



INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary)
VALUES ('Carl', 'Gavigan', 195-632-840, 410-859-1456, '6 York Road', 'cgavigan@gmail.com', 40000);

INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary)
VALUES ('Taylor', 'Gavigan', 194-212-975, 410-859-1457, '6 York Road', 'tgavigan@gmail.com', 45000);

INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary)
VALUES ('Chris', 'Davis', 214-567-980, 410-444-8888, '7 York Road', 'cdavis@gmail.com', 60000);

INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary)
VALUES ('Becca', 'Davis', 276-567-976, 410-444-8888, '7 York Road', 'bdavis@gmail.com', 42000);

INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary)
VALUES ('Jake', 'Lewis', 735-982-1562, 410-260-7395, '8 York Road', 'jlewis@gmail.com', 42000);




INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Phone, Address, Email, Salary)
VALUES ('Chris', 'Davis', 214-567-980, 'M', 410-444-8888, '7 York Road', 'cdavis@gmail.com', 60000);

INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Phone, Address, Email, Salary)
VALUES ('Shelly', 'Goforth', 635-789-987, 'F', 410-555-8778, '9 York Road', 'sgoforth@gmail.com', 50000);

INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Phone, Address, Email, Salary)
VALUES ('John', 'Brown', 635-753-047, 'M', 410-555-8778, '1 Second Street', 'jbrown@gmail.com', 56000);

INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Phone, Address, Email, Salary)
VALUES ('Sarah', 'Brown', 665-758-050, 'F', 410-555-8778, '1 Second Street', 'sbrown@gmail.com', 55000);

INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Phone, Address, Email, Salary)
VALUES ('Anotnio', 'Moore', 125-128-120, 'M', 410-115-1118, '2 Second Street', 'amoore@gmail.com', 52500);



INSERT INTO CLASS(courseID, courseName)
VALUES(457-01, 'Database Management');

INSERT INTO CLASS(courseID, courseName)
VALUES(458-01, 'Art History');

INSERT INTO CLASS(courseID, courseName)
VALUES(459-01, 'Physical Education');

INSERT INTO CLASS(courseID, courseName)
VALUES(460-01, 'Chemistry');

INSERT INTO CLASS(courseID, courseName)
VALUES(461-01, 'Accounting');



INSERT INTO SYSTEMADMIN(ID, Fname, Lname)
VALUES(0543215, 'Paul', 'Yun');

INSERT INTO SYSTEMADMIN(ID, Fname, Lname)
VALUES(0543216, 'Collin', 'Woodruff');

INSERT INTO SYSTEMADMIN(ID, Fname, Lname)
VALUES(0543217, 'Colby', 'Wellens');



INSERT INTO SCHOOLDEPT(schoolID)
VALUES(0123456789);

INSERT INTO GRADES(courseG)
VALUES('A');

INSERT INTO GRADES(courseG)
VALUES('B');

INSERT INTO GRADES(courseG)
VALUES('C');

INSERT INTO GRADES(courseG)
VALUES('D');

INSERT INTO GRADES(courseG)
VALUES('E');

INSERT INTO GRADES(courseG)
VALUES('F');

INSERT INTO ATTENDANCE(attDate)
VALUES(03/15/17);

INSERT INTO VIOLATIONS(vioDate, vioType)
VALUES(03/16/17, 'Unexcused Absence');
