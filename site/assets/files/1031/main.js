// If true, start function. If false, listen for INIT.

window.onload = function() {

    var container = document.querySelector('.container'),
            exit = document.querySelector('#bg-exit'),
            sky = document.querySelector('.sky'),
            grass = document.querySelector('.grass'),
            noortje = document.querySelector('.noortje'),
            nasrdin = document.querySelector('.nasrdin'),
            tree = document.querySelector('.tree'),
            oldenheimLogo = document.querySelector('.oldenheim-logo'),
            twelve = document.querySelector('.twelve'),
            logo = document.querySelector('.logo'),
            bottomBar = document.querySelector('.bottombar'),
            btn = document.querySelector('.btn'),
            txtWrapper = document.querySelector('.txt-wrapper'),
            contentTxt = document.querySelector('.content-txt'),
            sticker = document.querySelector('.sticker'),
            tl = new TimelineMax(),
            allowHover = false;

        tl

            .call(function(){
                allowHover = false;
            })
            .set(container, { autoAlpha: 1, perspective: 1000 })
            .set(sticker, { scale: 0.75  })
            .set (logo, { y: 240, x: 210 })
            .set (grass, { y: 480, rotationZ: 0.01, force3D: true })

            .from (noortje, 0.6, { autoAlpha:0, x:-20, rotationZ: 0.01, force3D: true })
            .from (nasrdin, 0.6, { autoAlpha:0, x: 20, rotationZ: 0.01, force3D: true }, '=-0.3')
            .from (sky, 1.8, { scale: 1.3, rotationZ: 0.01, force3D: true }, '=-0.9')

            .to (grass, 1.5, { y: 130, rotationZ: 0.01, force3D: true }, 'parallax')
            .to (sky, 1.5, { y: -100, rotationZ: 0.01, force3D: true }, 'parallax')
            .to (noortje, 1.5, { y: -150, x:-20, rotationZ: 0.01, force3D: true }, 'parallax')
            .to (nasrdin, 1.5, { y: -150, x: 40, rotationZ: 0.01, force3D: true }, 'parallax')
            .to (tree, 1.5, { y: -150 }, 'parallax')

            .to (oldenheimLogo, 2.5, { y:0, autoAlpha:1 }, 'parallax =+0.5')
            .fromTo (twelve, 1, { y:60, autoAlpha: 0 }, { y: 0, autoAlpha: 1 }, 'parallax =+0.8')
            
            .to (oldenheimLogo, 1, { y:0, autoAlpha:0 })
            .to (twelve, 1, { autoAlpha: 0 }, '=-0.2')

            .to (grass, 2.2, { y: 480, rotationZ: 0.01, force3D: true }, 'reverse')
            .to (sky, 2.2, { y: -10, rotationZ: 0.01, force3D: true }, 'reverse')
            .to (noortje, 2.2, { y: 0, x:0, rotationZ: 0.01, force3D: true  }, 'reverse')
            .to (nasrdin, 2.2, { y: 0, x:0, rotationZ: 0.01, force3D: true  }, 'reverse')
            .to (tree, 2.2, { y: 0 }, 'reverse')

            .call(function(){
                allowHover = true;
            })

            .to (oldenheimLogo, 1.2, { y:0, autoAlpha:1 })
            .to (twelve, 0.8, { y: 0, autoAlpha: 1 }, "=-0.8")

            .from(btn, 0.3, { scale : 1.1, rotationZ: 0.01, force3D: true, autoAlpha: 0 } )
            .from(sticker, 0.5, { scale : 0.5, rotationZ: 0.01, force3D: true, autoAlpha: 0 },'=+0.3')

            .to(btn, 0.12, { y: 3 }, '+=1.0')
            .to(btn, 0.12, { y: 0 })
            .to(btn, 0.12, { y: 3 })
            .to(btn, 0.12, { y: 0 })

            .to(btn, 0.12, { y: 3 }, '+=1.0')
            .to(btn, 0.12, { y: 0 })
            .to(btn, 0.12, { y: 3 })
            .to(btn, 0.12, { y: 0 })

            .to(btn, 0.12, { y: 5, }, '+=1.0')
            .to(btn, 0.12, { y: 0 })
            .to(btn, 0.12, { y: 3 })
            .to(btn, 0.12, { y: 0 })

         exit.addEventListener('mouseenter', function(){
            if(allowHover){
                TweenLite.to(btn, 0.2, { backgroundColor: '#86bc25' })
            }
         }, false);

         exit.addEventListener('mouseleave', function(){
            if(allowHover){
                TweenLite.to(btn, 0.2, { backgroundColor: '#52ae32' })

                //Parallax background
                TweenLite.to(grass, .6, { y: 480, rotationZ: 0.01, force3D: true })
                TweenLite.to (sky, .6, { y: -10, rotationZ: 0.01, force3D: true})
                TweenLite.to (noortje, .6, { y: 0, x:0, rotationZ: 0.01, force3D: true })
                TweenLite.to(nasrdin, .6, { y: 0, x:0, rotationZ: 0.01, force3D: true  })
                TweenLite.to(tree, .6, { y: 0, rotationZ: 0.01, force3D: true })
            }
         }, false);


        var docHeight = document.body.offsetHeight,
            creativeHeight = exit.offsetHeight,
            halfHeight = creativeHeight / 2;

        exit.addEventListener("mousemove", function(evt){
	        
	        if (!evt) evt = window.event;
            var y = evt.clientY; 

            var direction = {};
            
            if (y > halfHeight) {
                direction = "down";
            } else { 
                direction = "up";
            }

            if (direction == "up") {
                if(allowHover){
                    //Parallax background
                    TweenLite.to(grass, .8, { y: 475, rotationZ: 0.01, force3D: true }, "up")
                    TweenLite.to (noortje, 1, { y: -10, rotationZ: 0.01, force3D: true}, "up+=.2")
                    TweenLite.to(nasrdin, 1, { y: -10, rotationZ: 0.01, force3D: true}, "up+=.2")
                    TweenLite.to(tree, 1, { y: -7, rotationZ: 0.01, force3D: true }, "up+=.2")
                    TweenLite.to (sky, 1.2, { y: -20, rotationZ: 0.01, force3D: true}, "up+=.8")
                }
            }
             if (direction == "down") {
                if(allowHover){
                    //Parallax background
                    TweenLite.to(grass, 1, { y: 510, rotationZ: 0.01, force3D: true }, "down")
                    TweenLite.to (noortje, 1, { y: 20, rotationZ: 0.01, force3D: true }, "down+=.2")
                    TweenLite.to(nasrdin, 1, { y: 20, rotationZ: 0.01, force3D: true }, "down+=.2")
                    TweenLite.to(tree, 1, { y: 20, rotationZ: 0.01, force3D: true }, "down+=.4")
                    TweenLite.to (sky, 1, { y: 0, rotationZ: 0.01, force3D: true}, "down+=.6")
                }
            }
            

        });

        function bgExitHandler(e) {
            window.open(clickTag, '_blank');
        }

        document.getElementById('bg-exit').addEventListener('click', bgExitHandler, false);

    }