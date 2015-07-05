/*
 * @Author: rccoder
 * @Date:   2015-07-05 18:33:20
 * @Last Modified by:   rccoder
 * @Last Modified time: 2015-07-05 20:49:08
 */
$(document).ready(function() {
    $('#fullpage').fullpage({
        sectionsColor: ['#FF9900', '#FFCC33', '#FFFFCC', '#33CC99', '#FF6666'],
        anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'lastPage'],
        menu: '#menu',
        afterLoad: function(anchorLink, index) {
            if (index == 1) {
                $('#section0').find('h1').fadeIn(1000, function() {
                    $('#section0').find('p').fadeIn(1000);
                });
            }
            if (index == 2) {
                $('#section1').find('p').eq(0).fadeIn(800, function() {
                    $('#section1').find('p').eq(1).fadeIn(800, function() {
                        $('#section1').find('p').eq(2).fadeIn(800, function() {
                            $('#section1').find('p').eq(3).fadeIn(800, function() {
                                $('#section1').find('p').eq(4).fadeIn(800, function() {
                                    $('#section1').find('p').eq(5).fadeIn(800, function() {
                                        $('#section1').find('p').eq(6).fadeIn(800, function() {
                                            $('#section1').find('p').eq(7).fadeIn(800, function() {
                                                $('#section1').find('p').eq(8).fadeIn(800, function() {
                                                    $('#section1').find('p').eq(9).fadeIn(800, function() {
                                                        $('#section1').find('p').eq(10).fadeIn(800, function() {
                                                            $('#section1').find('p').eq(11).fadeIn(800, function() {})
                                                        })
                                                    })
                                                })
                                            })
                                        })
                                    })
                                })
                            })
                        })
                    })
                })
            }
            if (index == 3) {
                $('#section2').find('p').eq(0).fadeIn(800, function() {
                    $('#section2').find('p').eq(1).fadeIn(800, function() {
                        $('#section2').find('p').eq(2).fadeIn(800, function() {
                            $('#section2').find('p').eq(3).fadeIn(800, function() {
                                $('#section2').find('p').eq(4).fadeIn(800, function() {
                                    $('#section2').find('p').eq(5).fadeIn(800, function() {
                                        $('#section2').find('p').eq(6).fadeIn(800, function() {
                                            $('#section2').find('p').eq(7).fadeIn(800, function() {
                                                $('#section2').find('p').eq(8).fadeIn(800, function() {})
                                            })
                                        })
                                    })
                                })
                            })
                        })
                    })
                })
            }
            if (index == 4) {
                $('#section3').find('.form').fadeIn(1800)
            }
            if (index == 5) {
                $('#section4').find('h2').fadeIn(2000);
            }
        }
    });
});
