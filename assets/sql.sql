

CREATE VIEW tprofile_view as SELECT users.id, users.firstname, users.mname,
 users.lastname, users.reg_no, teacher.email, teacher.dob, teacher.
 gender, teacher.office_no, teacher.phoneno, 
teacher.dept_id FROM users inner JOIN teacher WHERE users.id=teacher.user_id



CREATE VIEW sprofile_view as SELECT users.id, users.firstname, users.mname, users.lastname, 
users.reg_no, student.email, student.dob, student.gender, student.location, student.phoneno, 
student.program_id FROM users inner JOIN student WHERE users.id=student.user_id


CREATE VIEW user_view as SELECT sprofile_view.id, sprofile_view.firstname, 
sprofile_view.mname, sprofile_view.lastname, 
sprofile_view.reg_no, program.program_id FROM sprofile_view 
inner JOIN program where sprofile_view.program_id = program.id 

CREATE VIEW course_view as SELECT course.id, course.course_name, course.course_code,
teacher_course.teacher_id FROM course inner JOIN teacher_course
where course.id = teacher_course.course_id

SELECT * FROM course_view inner JOIN users WHERE users.id = course_view.id

SELECT course_name, course_code,
			 CONCAT(firstname, mname, lastname) as byname 
			FROM course_view inner JOIN users WHERE users.id = course_view.id


SELECT CONCAT( users.firstname, users.mname, users.lastname) as Byname, course.course_name, course.course_code
FROM users 
JOIN teacher on users.id = teacher.user_id
JOIN teacher_course on teacher.id = teacher_course.teacher_id
JOIN course on teacher_course.course_id = course.id
WHERE role_id = 1 

-- CREATE VIEW attendance as SELECT users.id, users.firstname, users.mname, users.lastname, 
-- users.reg_no, program.program_id, course.course_id FROM users inner JOIN student and inner JOIN program and inner JOIN course 
-- WHERE student.user_id = users.id and WHERE program.id = student.program_id and WHERE course.id = attendance.course_id


create VIEW course_attendance as select user_view.id, user_view.firstname, user_view.mname, 
user_view.lastname, user_view.reg_no, attendance.attendance_date, attendance.course_id, user_view.program_id 
from user_view inner JOIN attendance where user_view.id = attendance.student_id



 select course_attendance.firstname, course_attendance.mname, course_attendance.lastname, course_attendance.attendance_date,
  program.program_name from course_attendance inner join program where program.id = course_attendance.program_id inner join course where
 course_attendance.course_id = course.id

 SELECT student_id, attendance_date from attendance WHERE teacher_id = 4 and course_id = 3

 select * from user_view inner JOIN attendance where user_view.id = attendance.student_id and attendance.course_id = 3



SELECT * from user_view inner JOIN program WHERE user_view.program_id = program.id 


select user_view.firstname, user_view.mname, user_view.lastname, user_view.reg_no, attendance.attendance_date from user_view 
inner JOIN attendance where user_view.id = attendance.student_id and attendance.course_id = 3 
--returns the names, reg_no, and attendance date of the specified course--


select CONCAT(course_attendance.firstname, course_attendance.mname, course_attendance.lastname) as names,
course_attendance.reg_no as reg, COUNT(course_attendance.attendance_date) as ettimes, program.program_name as pname 
from course_attendance 
JOIN program on course_attendance.program_id = program.id 
WHERE course_id = 3 
GROUP BY (names)


select * from tbl_name 
where cast(datecolumn as Date) = cast(getdate() as Date)

--kwanzatv--maria sarungi_tsehai--
--echo attendance according to current data attandance of the day--


select CONCAT(course_attendance.firstname, course_attendance.mname, course_attendance.lastname) as names, 
course_attendance.reg_no as reg, course_attendance.attendance_date as et, program.program_name as pname from course_attendance 
JOIN program on course_attendance.program_id = program.id WHERE course_id = 9 AND DATE(`attendance_date`) = CURDATE() GROUP BY (names)


--all attendances of all course with name of student
select CONCAT(course_attendance.firstname, course_attendance.mname, course_attendance.lastname) as names,
course_attendance.reg_no as reg, COUNT(course_attendance.attendance_date) as ettimes, program.program_name as pname 
from course_attendance 
JOIN program on course_attendance.program_id = program.id 
GROUP BY (names)
