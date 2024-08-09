
$(document).ready( function () {
    $('#extraClassTable').DataTable();
    $('#videoRecTable').DataTable();
    $('#notePaperTable').DataTable();
    $('#pendingListTable').DataTable();
    $('#noteViewTable').DataTable();
    $('#noteUploadTable').DataTable();
    $('#tutesRecTable').DataTable();
    $('#onlineExamTable').DataTable();
    $('#studentDetailsTable').DataTable();
    $('#inactiveAccountTable').DataTable();
    $('#studentVideoTbl').DataTable();
    $('#studentVideoSubjectTbl').DataTable();
    $('#schoolshipTable').DataTable();
    $('#otherGradeTable').DataTable();
    $('#freeVideoTable').DataTable();
    $('#subjectFeesList').DataTable();
    $('#monthIncomeTbl').DataTable();

});


document.addEventListener("DOMContentLoaded", function () {
    let maxHeight = 0;
    let cards = document.querySelectorAll(".schedule-card");

    // Find the tallest card
    cards.forEach((card) => {
        let height = card.clientHeight;
        if (height > maxHeight) {
            maxHeight = height;
        }
    });

    // Set all cards to the height of the tallest card
    cards.forEach((card) => {
        card.style.height = maxHeight + "px";
    });
});





 

const ctx = document.getElementById('monthlyIncomeChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      'January', 'February', 'March', 'April', 
      'May', 'June', 'July', 'August', 
      'September', 'October', 'November', 'December'
    ],
    datasets: [{
      label: 'Income',
      data: [
        0.00, 10000.00, 20000.00, 30000.00, 
        40000.00, 50000.00, 60000.00, 70000.00, 
        80000.00, 90000.00, 100000.00, 110000.00
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});





 









