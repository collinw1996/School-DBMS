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
      $("#loginFormControl").attr('action', 'students_list.php');
      alert("Form action is changed to 'students_list.php'\n Press Submit to confirm");
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
      case "Admin":
      $("#adminFormControl").attr('action', 'admins_list.php');
      alert("Form action is changed to 'View Admins'\n Press Submit to confirm");
      break;
      case "Staff":
      $("#adminFormControl").attr('action', 'admin_viewStaff.php');
      alert("Form action is changed to 'admin_viewStaff.php'\n Press Submit to confirm");
      break;
      case "Teacher":
      $("#adminFormControl").attr('action', 'admin_viewTeacher.php');
      alert("Form action is changed to 'admin_viewTeacher.php'\n Press Submit to confirm");
      break;
      case "Student":
      $("#adminFormControl").attr('action', 'admin_viewStudent.php');
      alert("Form action is changed to 'admin_viewStudent.php'\n Press Submit to confirm");
      break;
      case "Department":
      $("#adminFormControl").attr('action', 'admin_viewDepartment.php');
      alert("Form action is changed to 'admin_viewDepartment.php'\n Press Submit to confirm");
      break;
      case "Classes":
      $("#adminFormControl").attr('action', 'admin_viewClasses.php');
      alert("Form action is changed to 'admin_viewClasses.php'\n Press Submit to confirm");
      break;
      case "Attendance":
      $("#adminFormControl").attr('action', 'admin_viewAttendance.php');
      alert("Form action is changed to 'admin_viewAttendance.php'\n Press Submit to confirm");
      break;
      case "Grades":
      $("#adminFormControl").attr('action', 'admin_viewGrades.php');
      alert("Form action is changed to 'admin_viewGrades.php'\n Press Submit to confirm");
      break;
      case "Parents":
      $("#adminFormControl").attr('action', 'admin_viewParents.php');
      alert("Form action is changed to 'admin_viewParents.php'\n Press Submit to confirm");
      break;
      case "Violations":
      $("#adminFormControl").attr('action', 'admin_viewViolations.php');
      alert("Form action is changed to 'admin_viewViolations.php'\n Press Submit to confirm");
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
