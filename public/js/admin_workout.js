/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    var workoutTable = $('#workout_table');
    var thumbnail_url = 'http://fitness.localhost.com/images/workouts/';
    var relation_url = 'http://fitness.localhost.com/relation/';
    
    // var videl_url = 'http://fitness.localhost.com/videos/';
    
    var table = workoutTable.DataTable( {
        responsive: true,    
        processing: true,
        table: 'workouts',        
        ajax: {
            url: 'ajax/workout_admin',
            method: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}            
        },
        select: {
            style:    'multi',
            blurable: true
        },
        'order': [[1, 'asc']],
        columns: [   
            {
                data: null,
                defaultContent: '',
                className: 'center select-checkbox',
                orderable: false
            },
            { data: 'workout_id', name: 'workout_id', className: "center" },
            { data: 'name', name: 'name', className: "center" },
            { data: 'area', name: 'area', className: "center" },
            { data: 'movement', name: 'movement', className: "center" },
            { 
                className: "center",
                width: "80px",
                data: 'thumbnail', 
                name: 'thumbnail',               
                render: function ( data ) {
                    return '<img src="'+ thumbnail_url + data+'" style="width:100%" />';
                }
            },
            { data: 'description', name: 'description', className: "center" },
            { data: 'minutes', name: 'minutes', className: "center" },
            { 
                data: 'workout_id',
                className: "center",
                render: function (data) {
                    return '<a style="width=100%;height=100%;" class="edit_relation" href="' + 
                            relation_url + data + '">Edit Relations</a>';
                }
            }
        ],
        "columnDefs": [            
            { "width": "20%", "targets": "5" }
        ]
    } );
    
    table.buttons().container().appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
} );


    