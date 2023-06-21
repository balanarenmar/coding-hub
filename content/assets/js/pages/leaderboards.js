$(document).ready(function() {
    setTimeout(function() {

        // [ result ]
        $('#leaderboard1').DataTable({
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

        $('#leaderboard2').DataTable({
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

        $('#leaderboard3').DataTable({
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

        $('#leaderboard4').DataTable({
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

        $('#leaderboard5').DataTable({
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

        $('#leaderboard6').DataTable({
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

        $('#leaderboard7').DataTable({
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
