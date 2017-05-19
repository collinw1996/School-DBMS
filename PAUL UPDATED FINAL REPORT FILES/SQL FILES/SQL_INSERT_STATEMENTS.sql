INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
VALUES (0576259, 'John', 'R', 'Doe', 'M', '1996-09-13', 4108591176, '1 York Road', 'jdoe@gmail.com', 'jdoe', 'jpass');
INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
VALUES (0426553, 'Sam', 'L', 'Deer', 'F', '1997-04-24', 4105543575, '2 York Road', 'sdeer@gmail.com', 'sdeer', 'sdeerpass');
INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
VALUES (0422947, 'Paul', 'A', 'Jones', 'M', '1995-12-03', 4106627840, '3 York Road', 'pjones@gmail.com', 'pjones', 'pjonespass');
INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
VALUES (0946321, 'Lauren', 'F', 'Smith', 'F', '1996-06-30', 4106543211, '4 York Road', 'lsmith@gmail.com', 'lsmith', 'lsmithpass');
INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
VALUES (0786531, 'Matt', 'T', 'Williams', 'M', '1997-02-17', 4103726951, '5 York Road', 'mwilliams@gmail.com', 'mwill', 'mwillpass');


INSERT INTO PARENT(Fname, Lname, Phone, Address, Email, studentID)
VALUES ('Seamus', 'Doe', 4108591176, '1 York Road', 'sdoe@gmail.com',0576259);
INSERT INTO PARENT(Fname, Lname, Phone, Address, Email, studentID)
VALUES ('Lory', 'Deer', 4105543575, '2 York Road', 'ldeer@gmail.com',0426553);
INSERT INTO PARENT(Fname, Lname, Phone, Address, Email, studentID)
VALUES ('Stan', 'Jones', 4106627840, '3 York Road', 'sjones@gmail.com',0422947);
INSERT INTO PARENT(Fname, Lname, Phone, Address, Email, studentID)
VALUES ('Nick', 'Smith', 4106543211, '4 York Road', 'nsmith@gmail.com',0946321);
INSERT INTO PARENT(Fname, Lname, Phone, Address, Email, studentID)
VALUES ('Debbie', 'Williams', 4103726951, '5 York Road', 'dwilliams@gmail.com',0786531);


INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary, Username, Password)
VALUES ('Carl', 'Gavigan', 195632840, 4108591456, '6 York Road', 'cgavigan@gmail.com', 40000, 'cgavigan', 'cgfit');
INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary, Username, Password)
VALUES ('Taylor', 'Gavigan', 194212975, 4108591457, '6 York Road', 'tgavigan@gmail.com', 45000, 'tgavigan', 'tgfit');
INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary, Username, Password)
VALUES ('Chris', 'Davis', 214567980, 4104448888, '7 York Road', 'cdavis@gmail.com', 60000, 'cdavis', 'cdavpass');
INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary, Username, Password)
VALUES ('Becca', 'Davis', 276567976, 4104448888, '7 York Road', 'bdavis@gmail.com', 42000, 'bdavis', 'bdavispass');
INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary, Username, Password)
VALUES ('Jacob', 'Lewis', 739821562, 4102607395, '8 York Road', 'jlewis@gmail.com', 42000, 'jlewis', 'jlewispass');


INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
VALUES ('James', 'Davis', 214567980, 'M', '1987-01-23', 4104448888, '7 York Road', 'cdavis@gmail.com', 60000, 'jdavy', 'jpass', 4571);
INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
VALUES ('Shelly', 'Goforth', 635789987, 'F', '1987-02-23', 4105558778, '9 York Road', 'sgoforth@gmail.com', 50000, 'sgoforth', 'spassgo', 4581);
INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
VALUES ('John', 'Brown', 635753047, 'M', '1987-03-23', 4105558778, '1 Second Street', 'jbrown@gmail.com', 56000, 'jbrown', 'jbpass', 4591);
INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
VALUES ('Sarah', 'Brown', 665758050, 'F', '1987-04-23', 4105558778, '1 Second Street', 'sbrown@gmail.com', 55000, 'shbrown', 'shpass', 4601);
INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
VALUES ('Anotnio', 'Moore', 125128120, 'M', '1987-05-23', 4101151118, '2 Second Street', 'amoore@gmail.com', 52500, 'amoore', 'ampass', 4611);


INSERT INTO CLASS(courseID, courseName, studentID, participation)
VALUES(45701, 'Database Management', 0576259, 'A');
INSERT INTO CLASS(courseID, courseName, studentID, participation)
VALUES(45801, 'Art History', 0426553, 'A');
INSERT INTO CLASS(courseID, courseName, studentID, participation)
VALUES(45901, 'Physical Education', 0422947, 'B');
INSERT INTO CLASS(courseID, courseName, studentID, participation)
VALUES(46001, 'Chemistry', 0946321, 'C');
INSERT INTO CLASS(courseID, courseName, studentID, participation)
VALUES(46101, 'Accounting', 0786531, 'A');


INSERT INTO SYSTEMADMIN(ID, Fname, Lname, Username, Pass)
VALUES(0543215, 'Paul', 'Yun', 'root', 'pyun1db');
INSERT INTO SYSTEMADMIN(ID, Fname, Lname, Username, Pass)
VALUES(0543216, 'Collin', 'Woodruff', 'root2', 'cwood1db');
INSERT INTO SYSTEMADMIN(ID, Fname, Lname, Username, Pass)
VALUES(0543217, 'Colby', 'Wellens', 'root3', 'cwell1db');


INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0000000001, 45701, 214567980, 0543215);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0000000002, 45801, 635789987, 0543215);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0000000003, 45901, 635753047, 0543216);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0000000004, 46001, 665758050, 0543216);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0000000005, 46101, 125128120, 0543217);

INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID, Essn)
VALUES(1000000001, NULL, NULL, NULL, 195632840);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID, Essn)
VALUES(1000000002, NULL, NULL, NULL, 194212975);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID, Essn)
VALUES(1000000003, NULL,NULL, NULL, 214567980);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID, Essn)
VALUES(1000000004, NULL, NULL, NULL, 276567976);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID, Essn)
VALUES(1000000005, NULL, NULL, NULL, 739821562);


INSERT INTO GRADES(courseG, courseID, studentID)
VALUES('A', 45701, 0576259);
INSERT INTO GRADES(courseG, courseID, studentID)
VALUES('B', 45801, 0426553);
INSERT INTO GRADES(courseG, courseID, studentID)
VALUES('C', 45901, 0422947);
INSERT INTO GRADES(courseG, courseID, studentID)
VALUES('D', 46001, 0946321);
INSERT INTO GRADES(courseG, courseID, studentID)
VALUES('E', 46101, 0786531);


INSERT INTO ATTENDANCE(attDate, studentID)
VALUES('2017-03-15', 0576259);
INSERT INTO ATTENDANCE(attDate, studentID)
VALUES('2017-03-16', 0576259);
INSERT INTO ATTENDANCE(attDate, studentID)
VALUES('2017-03-17', 0576259);

INSERT INTO VIOLATIONS(vioDate, vioType, studentID)
VALUES('2017-03-15', 'Unexcused Absence', 0576259);
INSERT INTO VIOLATIONS(vioDate, vioType, studentID)
VALUES('2017-03-16', 'Unexcused Absence', 0576259);
INSERT INTO VIOLATIONS(vioDate, vioType, studentID)
VALUES('2017-03-17', 'Unexcused Absence', 0576259);