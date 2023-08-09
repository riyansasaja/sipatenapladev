const ctx = document.getElementById('uploadChart');


  new Chart(ctx, {
    
    type: 'line',
    data: {
      labels: ['Jan','Feb','Mar','Apr','Mei', 'Jun','Jul', 'Aug',],
      datasets:[
        {
        label: 'Bitg',
        data: [5, 9, 8, 1, 6, 5, 2],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
      },
      {
        label: 'Mdo',
        data: [5, 8, 10, 1, 2, 10, 8],
        fill: false,
        borderColor: 'rgb(128, 0, 0)',
        tension: 0.1
      },
      {
        label: 'Amrg',
        data: [6, 2, 1, 2, 4, 2, 1],
        fill: false,
        borderColor: 'rgb (115, 255, 216)',
        tension: 0.1
      },
      {
        label: 'Llk',
        data: [4, 2, 2, 4, 5, 8, 8],
        fill: false,
        borderColor: '#2ef002',
        tension: 0.1
      },
      {
        label: 'Tdo',
        data: [2, 6, 7, 6, 4, 3, 6],
        fill: false,
        borderColor: '#f07902',
        tension: 0.1
      },
      {
        label: 'Blu',
        data: [4, 2, 2, 4, 7, 8, 4],
        fill: false,
        borderColor: '#f00289',
        tension: 0.1
      },
      {
        label: 'Ktg',
        data: [6, 4, 6, 8,4, 2, 6],
        fill: false,
        borderColor: '#b102f0',
        tension: 0.1
      },
      {
        label: 'Bork',
        data: [3, 2, 1, 0, 1, 2, 3],
        fill: false,
        borderColor: '#0269f0',
        tension: 0.1
      },
      {
        label: 'Thn',
        data: [2, 1, 0, 1, 2, 0, 1],
        fill: false,
        borderColor: '#02f02e',
        tension: 0.1
      },
      {
        label: 'Tty',
        data: [1, 1, 0, 0, 2, 0, 1],
        fill: false,
        borderColor: '#60768f',
        tension: 0.1
      }
    ]
    }
  });

  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
  