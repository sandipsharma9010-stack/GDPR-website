<script>

    $(function() {
        const selector = 'section,article,p,div,span,figure,img,li,tr';

        function addAttrs($el) {
            if (!$el.is('[data-ns-animate]')) $el.attr('data-ns-animate', '');
            if (!$el.is('[data-delay]')) $el.attr('data-delay', '0.4');
        }

        $(selector).each(function() {
            const $el = $(this);

            if ($el.parent().is(selector)) return;

            addAttrs($el);
        });

        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(m => {
                m.addedNodes && $(m.addedNodes).each(function() {
                    if (this.nodeType !== 1) return;
                    const $node = $(this);

                    if ($node.is(selector) && !$node.parent().is(selector)) {
                        addAttrs($node);
                    }
                });
            });
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    });


    (function() {
        const selector = 'section,article,p,div,span,figure,img,li,tr';

        function addAttrs(el) {
            if (!el.hasAttribute('data-ns-animate')) el.setAttribute('data-ns-animate', '');
            if (!el.hasAttribute('data-delay')) el.setAttribute('data-delay', '0.4');
        }

        document.querySelectorAll(selector).forEach(el => {
            if (el.parentElement && el.parentElement.matches(selector)) return;
            addAttrs(el);
        });

        const observer = new MutationObserver(mutations => {
            for (const m of mutations) {
                for (const node of m.addedNodes) {
                    if (node.nodeType !== 1) continue;
                    if (node.matches(selector) && !(node.parentElement && node.parentElement.matches(selector))) {
                        addAttrs(node);
                    }
                }
            }
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    })();

</script>