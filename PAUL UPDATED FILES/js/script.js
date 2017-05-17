$(document).ready(function() {
  // Navigation links to tables from login page
  $("#userType").change(function() {
    var selected = $(this).children(":selected").text();
    switch (selected) {
      case "Admin":
      $("#loginFormControl").attr('action', 'admins_list.php');
      alert("Form action is changed to 'admins_list.php'\n Press Submit to confirm");
      break;
      case "Staff":
      $("#loginFormControl").attr('action', 'staff_list.php');
      alert("Form action is changed to 'staff_list.php'\n Press Submit to confirm");
      break;
      case "Teacher":
      $("#loginFormControl").attr('action', 'teachers_list.php');
      alert("Form action is changed to 'teachers_list.php'\n Press Submit to confirm");
      break;
      case "Student":
      $("#loginFormControl").attr('action', 'student_viewGrades.php');
      alert("Form action is changed to 'student_viewGrades.php'\n Press Submit to confirm");
      break;
      default:
      $("#loginFormControl").attr('action','#');
    }
  });
  $(".back").click(function() {
    parent.history.back();
    return false;
  });
});

// Navigation links to other tables from admin page
$(document).ready(function() {
  $("#selectTable").change(function() {
    var selected = $(this).children(":selected").text();
    switch (selected) {
      case "Back":
      $("#adminFormControl").attr('action', 'index.php');
      break;
      case "Admin":
      $("#adminFormControl").attr('action', 'admins_list.php');
      break;
      case "Staff":
      $("#adminFormControl").attr('action', 'admin_viewStaff.php');
      break;
      case "Teacher":
      $("#adminFormControl").attr('action', 'admin_viewTeacher.php');
      break;
      case "Student":
      $("#adminFormControl").attr('action', 'admin_viewStudent.php');
      break;
      case "Department":
      $("#adminFormControl").attr('action', 'admin_viewDepartment.php');
      break;
      case "Classes":
      $("#adminFormControl").attr('action', 'admin_viewClasses.php');
      break;
      case "Attendance":
      $("#adminFormControl").attr('action', 'admin_viewAttendance.php');
      break;
      case "Grades":
      $("#adminFormControl").attr('action', 'admin_viewGrades.php');
      break;
      case "Parents":
      $("#adminFormControl").attr('action', 'admin_viewParents.php');
      break;
      case "Violations":
      $("#adminFormControl").attr('action', 'admin_viewViolations.php');
      break;
      default:
      $("#adminFormControl").attr('action','#');
    }
  });
  $(".back").click(function() {
    parent.history.back();
    return false;
  });
});

  // Navigation links to tables from students pages
$(document).ready(function() {
  $("#selectTable").change(function() {
    var selected = $(this).children(":selected").text();
    switch (selected) {
      case "Back":
      $("#studentFormControl").attr('action', 'index.php');
      break;
      case "Classes":
      $("#studentFormControl").attr('action', 'student_viewClasses.php');
      break;
      case "Attendance":
      $("#studentFormControl").attr('action', 'student_viewAttendance.php');
      break;
      case "Grades":
      $("#studentFormControl").attr('action', 'student_viewGrades.php');
      break;
      case "Parents":
      $("#studentFormControl").attr('action', 'student_viewParents.php');
      break;
      case "Violations":
      $("#studentFormControl").attr('action', 'student_viewViolations.php');
      break;
      default:
      $("#studentFormControl").attr('action','#');
    }
  });
  $(".back").click(function() {
    parent.history.back();
    return false;
  });
});

$(document).ready(function() {
  $("#selectTable").change(function() {
    var selected = $(this).children(":selected").text();
    switch (selected) {
      case "Back":
      $("#backToIndex").attr('action', 'index.php');
      break;
      case "Students":
      $("#backToIndex").attr('action', 'teachers_students.php');
      break;
      case "Teachers":
      $("#backToIndex").attr('action', 'teachers_list.php');
      break;
      default:
      $("#backToIndex").attr('action','#');
    }
  });
  $(".back").click(function() {
    parent.history.back();
    return false;
  });
});
