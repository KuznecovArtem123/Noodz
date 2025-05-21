<div class="faq" >
    <div class="faq__heading"><h2 class="faq__heading_span">FAQ</h2></div>
    <div class="faq__accordion" x-data="accordion">
        <x-accordion.element text="Wie zit er achter Noodz?" tab='1' content='content'/>
        <x-accordion.element text="Wat is Noodz?" tab='2' content='content'/>
        <x-accordion.element text="Waarom is Noodz opgericht?" tab='3' content='content'/>
        <x-accordion.element text="Is Noodz volledig eco-friendly, vegan en klimaatneutraal?" tab='4' content='content'/>
    </div>
    <div class="faq__lines">
        <img src="{{ asset('img/faq/line-2.png') }}" alt="" class="faq__line-2">
        <img src="{{ asset('img/faq/line-1.png') }}" alt="" class="faq__line-1">
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('accordion', () => ({
            open: false,
            current: 0,
            newStyle: {
                height: "185px",
            },
            content:
            "Het maken van de juiste keuzes zou \
            eenvoudig moeten zijn. Toch is het \
            juist heel lastig om écht eerlijke \
            producten te vinden. En waarom zijn \
            we het eigenlijk gewoon gaan vinden \
            dat je daar zelf naar moet zoeken?",
            changeTab(event, tab) {
                this.current = this.current == tab ? 0 : tab;
                this.newStyle.height = this.current == tab ? '400px' : '185px';
            }
        }))
    })

</script>
