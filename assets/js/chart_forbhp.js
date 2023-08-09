const ctx = document.getElementById('uploadChart');


  new Chart(ctx, {
    
    type: 'line',
    data: {
      labels: ['Jan','Feb','Mar','Apr','Mei', 'Jun','Jul', 'Aug',],
      datasets:[
        {
        label: 'Bitg',
        data: [65, 59, 80, 81, 56, 55, 40],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
      },
      {
        label: 'Mdo',
        data: [5, 8, 10, 1, 22, 10, 8],
        fill: false,
        borderColor: 'rgb(128, 0, 0)',
        tension: 0.1
      },
      {
        label: 'Amrg',
        data: [6, 2, 1, 2, 4, 2, 1],
        fill: false,
        borderColor: 'rgb(128, 0, 0)',
        tension: 0.1
      },
      {
        label: 'Llk',
        data: [5, 8, 10, 1, 22, 10, 8],
        fill: false,
        borderColor: 'rgb(128, 0, 0)',
        tension: 0.1
      },
      {
        label: 'Tdo',
        data: [5, 8, 10, 1, 22, 10, 8],
        fill: false,
        borderColor: 'rgb(128, 0, 0)',
        tension: 0.1
      },
      {
        label: 'Blu',
        data: [5, 8, 10, 1, 22, 10, 8],
        fill: false,
        borderColor: 'rgb(128, 0, 0)',
        tension: 0.1
      },
      {
        label: 'Ktg',
        data: [5, 8, 10, 1, 22, 10, 8],
        fill: false,
        borderColor: 'rgb(128, 0, 0)',
        tension: 0.1
      },
      {
        label: 'Bork',
        data: [5, 8, 10, 1, 22, 10, 8],
        fill: false,
        borderColor: 'rgb(128, 0, 0)',
        tension: 0.1
      },
      {
        label: 'Thn',
        data: [5, 8, 10, 1, 22, 10, 8],
        fill: false,
        borderColor: 'rgb(128, 0, 0)',
        tension: 0.1
      },
      {
        label: 'Tty',
        data: [5, 8, 10, 1, 22, 10, 8],
        fill: false,
        borderColor: 'rgb(128, 0, 0)',
        tension: 0.1
      }
    ]
    }
  });