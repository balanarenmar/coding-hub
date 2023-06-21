const play = document.querySelector('button');

        const svgContainer = document.getElementById('svg-fx');
        const animItem = bodymovin.loadAnimation({
            wrapper: svgContainer,
            animType: 'svg',    
            loop: false,
            autoplay: false,
            path: 'https://assets2.lottiefiles.com/packages/lf20_u4yrau.json'
        });

        play.addEventListener('click', () => {
            svgContainer.classList.remove('hide-fx');
            animItem.goToAndPlay(0,true);
        })

        animItem.addEventListener('complete', () => {
            svgContainer.classList.add('hide-fx');
            
        })