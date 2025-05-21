<div class="footer">
    <div class="footer__content">
            <div class="footer__offer">
                <h3 class="footer__offer-heading">We are Noodz</h3>
                <span class="footer__offer-span">
                    En we zijn open over alles! Stel
                    ons je vragen of deel je ideeën:
                    letstalk@wearenoodz.com
                </span>
            </div>
            <div class="footer__interview">
                <h3 class="footer__interview-heading">Pers</h3>
                <span class="footer__interview-span">
                    Neem contact op voor onze
                    presskit of regel een interview:
                    letstalk@wearenoodz.com
                </span>
            </div>
            <div class="footer__illustration">
                <img src="{{ asset('img/footer/noodz.png') }}" alt="" class="footer__logo">
                <div class="footer__carousel" x-data="carousel">
                    <div class="footer__carousel_content" x-init="start()" :style="{transform: `translate(${trans}px)`}">
                        <p class="footer__carousel_text">
                            <i class="fa-solid fa-star-of-life footer__carousel_icon"></i>
                            <span class="footer__carousel_span">Nothing to Hide</span>
                        </p>
                        <p class="footer__carousel_text">
                            <i class="fa-solid fa-star-of-life footer__carousel_icon"></i>
                            <span class="footer__carousel_span">Nothing to Hide</span>
                        </p>
                        <p class="footer__carousel_text">
                            <i class="fa-solid fa-star-of-life footer__carousel_icon"></i>
                            <span class="footer__carousel_span">Nothing to Hide</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer__copyrights">
                <span class="footer__element">Privacyverklaring</span>
                <span class="footer__element">Disclaimer</span>
                <span class="footer__element">We Cut the Code 🤘🏽</span>
            </div>
    </div>
</div>
<script>
    let carousel = {
    trans: 0,
    start() {
        this.intervalId = setInterval(() => {
            if (this.trans <= -171) {
                this.trans = 0
            } else {
                this.trans--
            }
        }, 10);

    }

}
</script>
