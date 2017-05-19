INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
<<<<<<< HEAD
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
=======
VALUES (0576259, 'John', 'R', 'Doe', 'M', 09/13/96, 410-859-1176, '1 York Road', 'jdoe@gmail.com', 'jdoe', 'jpass');
INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
VALUES (0426553, 'Sam', 'L', 'Deer', 'F', 04/24/97, 410-554-3575, '2 York Road', 'sdeer@gmail.com', 'sdeer', 'sdeer');
INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
VALUES (0422947, 'Paul', 'A', 'Jones', 'M', 12/03/95, 410-662-7840, '3 York Road', 'pjones@gmail.com', 'pjones', 'pjones');
INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
VALUES (0946321, 'Lauren', 'F', 'Smith', 'F', 06/30/96, 410-654-321, '4 York Road', 'lsmith@gmail.com', 'lsmithpass', 'lsmithpass');
INSERT INTO STUDENT(studentID, Fname, Minit, Lname, Gender, Bdate, parentPhone, Address, Email, Username, Password)
VALUES (0786531, 'Matt', 'T', 'Williams', 'M', 02/17/97, 410-372-6951, '5 York Road', 'mwilliams@gmail.com', 'mwill', 'mwill');


INSERT INTO PARENT(Fname, Lname, Phone, Address, Email, studentID)
VALUES ('Seamus', 'Doe', 410-859-1176, '1 York Road', 'sdoe@gmail.com',0576259);
INSERT INTO PARENT(Fname, Lname, Phone, Address, Email, studentID)
VALUES ('Lory', 'Deer', 410-554-3575, '2 York Road', 'ldeer@gmail.com',0426553);
INSERT INTO PARENT(Fname, Lname, Phone, Address, Email, studentID)
VALUES ('Stan', 'Jones', 410-662-7840, '3 York Road', 'sjones@gmail.com',0422947);
INSERT INTO PARENT(Fname, Lname, Phone, Address, Email, studentID)
VALUES ('Nick', 'Smith', 410-654-321, '4 York Road', 'nsmith@gmail.com',0946321);
INSERT INTO PARENT(Fname, Lname, Phone, Address, Email, studentID)
VALUES ('Debbie', 'Williams', 410-372-6951, '5 York Road', 'dwilliams@gmail.com',0786531);


INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary, Username, Password)
VALUES ('Carl', 'Gavigan', 195632840, 410-859-1456, '6 York Road', 'cgavigan@gmail.com', 40000, 'cgavigan', 'cgfit');
INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary, Username, Password)
VALUES ('Taylor', 'Gavigan', 194212975, 410-859-1457, '6 York Road', 'tgavigan@gmail.com', 45000, 'tgavigan', 'tgfit');
INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary, Username, Password)
VALUES ('Chris', 'Davis', 214567980, 410-444-8888, '7 York Road', 'cdavis@gmail.com', 60000, 'cdavis', 'cdavpass');
INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary, Username, Password)
VALUES ('Becca', 'Davis', 276567976, 410-444-8888, '7 York Road', 'bdavis@gmail.com', 42000, 'bdavis', 'bdavispass');
INSERT INTO REGEMPLOYEE(Fname, Lname, Ssn, Phone, Address, Email, Salary, Username, Password)
VALUES ('Jake', 'Lewis', 7359821562, 410-260-7395, '8 York Road', 'jlewis@gmail.com', 42000, 'jlewis', 'jlewispass');


INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
VALUES ('James', 'Davis', 214567980, 'M', 1/23/87, 410-444-8888, '7 York Road', 'cdavis@gmail.com', 60000, 'jdavy', 'jpass', 457-1);
INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
VALUES ('Shelly', 'Goforth', 635789987, 'F', 2/23/87, 410-555-8778, '9 York Road', 'sgoforth@gmail.com', 50000 'sgoforth', 'spassgo', 458-1);
INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
VALUES ('John', 'Brown', 635753047, 'M', 3/23/87, 410-555-8778, '1 Second Street', 'jbrown@gmail.com', 56000 'jbrown', 'jbpass', 459-1);
INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
VALUES ('Sarah', 'Brown', 665758050, 'F', 4/23/87, 410-555-8778, '1 Second Street', 'sbrown@gmail.com', 55000 'shbrown', 'shpass', 460-1);
INSERT INTO TEACHER(Fname, Lname, Ssn, Gender, Bdate, Phone, Address, Email, Salary, Username, Password, courseID)
VALUES ('Anotnio', 'Moore', 125128120, 'M', 5/23/87, 410-115-1118, '2 Second Street', 'amoore@gmail.com', 52500 'amoore', 'ampass', 461-1);


INSERT INTO CLASS(courseID, courseName, studentID, participation)
VALUES(457-1, 'Database Management', 0576259, A);
INSERT INTO CLASS(courseID, courseName, studentID, participation)
VALUES(458-1, 'Art History', 0426553, A);
INSERT INTO CLASS(courseID, courseName, studentID, participation)
VALUES(459-1, 'Physical Education', 0422947, B);
INSERT INTO CLASS(courseID, courseName, studentID, participation)
VALUES(460-1, 'Chemistry', 0946321, C);
INSERT INTO CLASS(courseID, courseName, studentID, participation)
VALUES(461-1, 'Accounting', 0786531, A);


INSERT INTO SYSTEMADMIN(ID, Fname, Lname, Username, Password)
VALUES(0543215, 'Paul', 'Yun', 'root', 'pyun1db');
INSERT INTO SYSTEMADMIN(ID, Fname, Lname, Username, Password)
VALUES(0543216, 'Collin', 'Woodruff' 'root2', 'cwood1db');
INSERT INTO SYSTEMADMIN(ID, Fname, Lname, Username, Password)
VALUES(0543217, 'Colby', 'Wellens' 'root3', 'cwell1db');


INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0123456789, 457-1, 214567980, 0543215);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0123456789, 458-1, 635789987, 0543215);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0123456789, 459-1, 635753047, 0543216);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0123456789, 460-1, 665758050, 0543216);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0123456789, 461-1, 125128120, 0543217);

INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID, Essn)
VALUES(0123456789, 0, 0, 0, 195632840);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0123456789, 0, 0, 0, 194212975);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0123456789, 0, 0, 0, 214567980);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0123456789, 0, 0, 0, 276567976);
INSERT INTO SCHOOLDEPT(schoolID, courseID, Ssn, ID)
VALUES(0123456789, 0, 0, 0, 7359821562);


INSERT INTO GRADES(courseG, courseID, studentID)
VALUES('A', 457-1, 0576259);
INSERT INTO GRADES(courseG, courseID, studentID)
VALUES('B', 458-1, 0426553);
INSERT INTO GRADES(courseG, courseID, studentID)
VALUES('C', 459-1, 0422947);
INSERT INTO GRADES(courseG, courseID, studentID)
VALUES('D', 460-1, 0946321);
INSERT INTO GRADES(courseG, courseID, studentID)
VALUES('E', 461-1, 0786531);


INSERT INTO ATTENDANCE(attDate, studentID)
VALUES(03/15/17, 0576259);
INSERT INTO ATTENDANCE(attDate, studentID)
VALUES(03/16/17, 0576259);
INSERT INTO ATTENDANCE(attDate, studentID)
VALUES(03/17/17, 0576259);

INSERT INTO VIOLATIONS(vioDate, vioType, studentID)
VALUES(03/15/17, 'Unexcused Absence', 0576259);
INSERT INTO VIOLATIONS(vioDate, vioType, studentID)
VALUES(03/16/17, 'Unexcused Absence', 0576259);
INSERT INTO VIOLATIONS(vioDate, vioType, studentID)
VALUES(03/17/17, 'Unexcused Absence', 0576259);
>>>>>>> origin/master
