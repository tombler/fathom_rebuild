fathom.controller('TypistCtrl', function ($scope, $location) {

    $scope.init = function () {
        $(function() {
            $('.typist')
                .typist({
                    speed: 12,
                    text: 'Fathom\n'
                })
                .typistPause(1750) // 1.75 sec
                .typistAdd('v. to penetrate to the truth of; come to understand.\n')
                .typistPause(1250) // 1.25 sec
                .typistAdd('n. lifestyle platform for youth empowerment and social innovation.'); 

                $('.ghost-btn-fill').hide().delay(15000).fadeIn('slow');    
        });   
    };


});