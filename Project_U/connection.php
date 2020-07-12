<?php
	$conn = mysqli_connect("localhost","root","","project_u");
	$semester_code = "317";

	 /*create table course
    
     (
    
     course_id varchar(30),
    
     course_info varchar(40),
    
     semester_code varchar(4),
    
     primary key(course_id,course_info,semester_code)
    
     );*/

	/*"select cs.course_info,s.student_Name,cs.student_id,cf.total_class,cs.class_attended from course_student cs,student s,course_faculty cf where cs.course_info='Stance A' and cs.student_id = s.student_id and cf.course_info='Stance A' and cs.semester_code='317' and cf.semester_code = '317'";*/

     //select cs.course_info,s.student_name,cs.student_id from course_student cs,student s,course_faculty cf where cs.course_info='Beamer A' and cs.student_id = s.student_id and cf.course_info='Beamer A' and cs.semester_code='317' and cf.semester_code = '317';



?>