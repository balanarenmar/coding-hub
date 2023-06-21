$(document).ready(function() {
    setTimeout(function() {

        // [ result ]
        $('#leaderboard').DataTable({
            "order": [
                [1, "desc"]
            ],
            'columns' : [
                null,
                null,
                {'visible' : false },//hide the column
                {'visible' : false },
                {'visible' : false }
            ],
            scrollY: '50vh',
            scrollCollapse: true,
            paging: false
        });
        
    }, 350);
});
