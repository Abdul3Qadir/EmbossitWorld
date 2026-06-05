window.addEventListener('load', () => {
    if (!document.getElementById('testimonial-track')) return;

    const track1 = document.getElementById('service-carousel');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    
    if (track1 && nextBtn && prevBtn) {
        let originalItems = Array.from(track1.children);
        const gap = 20; 

        originalItems.forEach(item => {
            let cloneFirst = item.cloneNode(true);
            let cloneLast = item.cloneNode(true);
            track1.appendChild(cloneFirst);
            track1.insertBefore(cloneLast, track1.firstChild);
        });

        let counter1 = originalItems.length;
        let isTransitioning = false;

        function getSlideWidth() {
            return track1.children[0].getBoundingClientRect().width + gap;
        }

        function updatePosition(animate = true) {
            const offset = getSlideWidth() * counter1;
            track1.style.transition = animate ? "transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)" : "none";
            track1.style.transform = `translateX(${-offset}px)`;
        }

        window.addEventListener('load', () => updatePosition(false));
        setTimeout(() => updatePosition(false), 50);

        track1.addEventListener('transitionend', () => {
            isTransitioning = false;
            if (counter1 >= originalItems.length * 2) {
                counter1 = originalItems.length;
                updatePosition(false);
            }
            if (counter1 <= 0) {
                counter1 = originalItems.length;
                updatePosition(false);
            }
        });

        nextBtn.addEventListener('click', () => {
            if (isTransitioning) return;
            isTransitioning = true;
            counter1++;
            updatePosition(true);
        });

        prevBtn.addEventListener('click', () => {
            if (isTransitioning) return;
            isTransitioning = true;
            counter1--;
            updatePosition(true);
        });

        window.addEventListener('resize', () => {
            updatePosition(false);
        });
    }

    const wrappers = document.querySelectorAll('.shine-wrapper');
    if (wrappers.length > 0) {
        let currentIndex = 0;
        const applyShine = () => {
            wrappers.forEach(w => w.classList.remove('animate-shine'));
            wrappers[currentIndex].classList.add('animate-shine');
            currentIndex = (currentIndex + 1) % wrappers.length;
        };
        setInterval(applyShine, 3000);
    }

    const counters = document.querySelectorAll('.counter');
    if (counters.length > 0) {
        const speed = 40;
        const startCounter = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const updateCount = () => {
                        const target = +counter.getAttribute('data-target');
                        const count = +counter.innerText;
                        const increment = Math.ceil(target / speed);

                        if (count < target) {
                            counter.innerText = count + increment;
                            setTimeout(updateCount, 40);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                    observer.unobserve(counter);
                }
            });
        };
        const observer = new IntersectionObserver(startCounter, { threshold: 0.5 });
        counters.forEach(counter => observer.observe(counter));
    }

    const track = document.getElementById('testimonial-track');
    const nextBtn2 = document.getElementById('custom-next');
    const prevBtn2 = document.getElementById('custom-prev');

    if (track && nextBtn2 && prevBtn2) {
        const slides = Array.from(track.children);
        const firstClone = slides[0].cloneNode(true);
        const lastClone = slides[slides.length - 1].cloneNode(true);

        track.appendChild(firstClone);
        track.insertBefore(lastClone, slides[0]);

        let counter = 1;
        let autoPlayInterval;

        function setInitialPosition() {
            const size = track.clientWidth;
            track.style.transition = "none";
            track.style.transform = `translateX(${-size * counter}px)`;
        }

        function updateSlide() {
            const size = track.clientWidth;
            track.style.transition = "transform 0.5s ease-in-out";
            track.style.transform = `translateX(${-size * counter}px)`;
        }

        track.addEventListener('transitionend', () => {
            const size = track.clientWidth;
            if (counter >= slides.length + 1) {
                track.style.transition = "none";
                counter = 1;
                track.style.transform = `translateX(${-size * counter}px)`;
            }
            if (counter <= 0) {
                track.style.transition = "none";
                counter = slides.length;
                track.style.transform = `translateX(${-size * counter}px)`;
            }
        });

        nextBtn2.addEventListener('click', () => {
            if (counter >= slides.length + 1) return;
            counter++;
            updateSlide();
            resetAutoPlay();
        });

        prevBtn2.addEventListener('click', () => {
            if (counter <= 0) return;
            counter--;
            updateSlide();
            resetAutoPlay();
        });

        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                counter++;
                updateSlide();
            }, 5000);
        }

        function resetAutoPlay() {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        }

        window.addEventListener('resize', setInitialPosition);
        setInitialPosition();
        startAutoPlay();
    }
});