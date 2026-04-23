/**
 * Mobile Navbar — Drawer + Breadcrumb Navigation
 * Breadcrumb is injected inside the drawer at the top.
 */
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {

        var navMenu  = document.querySelector('.navbar-nav');
        var toggler  = document.querySelector('.navbar-toggler');
        var closeBtn = document.querySelector('.btn-nav-close');

        if (!navMenu || !toggler) return;

        /* ── Inject breadcrumb bar inside the drawer ── */
        var crumbBar = document.createElement('li');
        crumbBar.className = 'nav-breadcrumb-bar';
        crumbBar.style.cssText = [
            'display:none',
            'list-style:none',
            'background:rgba(0,0,0,0.25)',
            'padding:8px 15px',
            'align-items:center',
            'gap:10px',
            'border-bottom:1px solid rgba(255,255,255,0.1)',
            'margin:0'
        ].join(';');
        crumbBar.innerHTML =
            '<span class="crumb-back" style="display:none;align-items:center;gap:6px;padding:4px 10px;background:rgba(255,255,255,0.2);border:1px solid rgba(255,255,255,0.3);border-radius:3px;font-size:12px;color:#fff;cursor:pointer;white-space:nowrap;">' +
                '<i class="fa fa-chevron-left" style="font-size:11px;"></i> Back' +
            '</span>' +
            '<span class="crumb-path" style="flex:1;color:#fff;font-size:13px;font-weight:600;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;letter-spacing:0.3px;">Home</span>';

        /* Insert right after .nav-close li */
        var navClose = navMenu.querySelector('.nav-close');
        var insertAfter = navClose ? navClose.nextSibling : navMenu.firstChild;
        navMenu.insertBefore(crumbBar, insertAfter);

        var crumbBack = crumbBar.querySelector('.crumb-back');
        var crumbPath = crumbBar.querySelector('.crumb-path');

        /* ── State ── */
        var stack    = [];
        var isMobile = window.innerWidth <= 1020;

        /* ── Render breadcrumb text ── */
        function renderBreadcrumb() {
            var parts = ['Home'].concat(stack.map(function (s) { return s.label; }));
            crumbPath.textContent = parts.join(' \u203a ');
            crumbBack.style.display = stack.length > 0 ? 'inline-flex' : 'none';
        }

        /* ── Collapse all open items inside a container ── */
        function closeDescendants(container) {
            var opens = container.querySelectorAll('.nav-item.open');
            for (var i = 0; i < opens.length; i++) {
                opens[i].classList.remove('open');
            }
        }

        /* ── Get sibling nav-items ── */
        function getSiblings(item) {
            var result = [];
            var children = item.parentElement.children;
            for (var i = 0; i < children.length; i++) {
                if (children[i] !== item && children[i].classList.contains('nav-item')) {
                    result.push(children[i]);
                }
            }
            return result;
        }

        /* ── Open drawer ── */
        function openMenu() {
            navMenu.classList.add('active');
            stack = [];
            renderBreadcrumb();
            crumbBar.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        /* ── Close drawer ── */
        function closeMenu() {
            navMenu.classList.remove('active');
            stack = [];
            closeDescendants(navMenu);
            crumbBar.style.display = 'none';
            document.body.style.overflow = '';
        }

        /* ── Back button click ── */
        crumbBack.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (!stack.length) return;

            var current = stack.pop();
            current.item.classList.remove('open');
            closeDescendants(current.item);
            renderBreadcrumb();
        });

        /* ── Hamburger ── */
        toggler.addEventListener('click', function () {
            if (isMobile) openMenu();
        });

        /* ── Close button inside drawer ── */
        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                closeMenu();
            });
        }

        /* ── Backdrop click-to-close ── */
        document.addEventListener('click', function (e) {
            if (
                isMobile &&
                navMenu.classList.contains('active') &&
                !navMenu.contains(e.target) &&
                !toggler.contains(e.target)
            ) {
                closeMenu();
            }
        });

        /* ── Attach click to every .nav-item.icon > .nav-link ── */
        var iconLinks = navMenu.querySelectorAll('.nav-item.icon > .nav-link');
        for (var j = 0; j < iconLinks.length; j++) {
            (function (link) {
                link.addEventListener('click', function (e) {
                    if (!isMobile) return;
                    e.preventDefault();
                    e.stopPropagation();

                    var parentItem = link.parentElement;
                    var isOpen = parentItem.classList.contains('open');

                    /* Collapse open siblings and remove them from stack */
                    getSiblings(parentItem).forEach(function (sib) {
                        if (sib.classList.contains('open')) {
                            stack = stack.filter(function (s) { return s.item !== sib; });
                            sib.classList.remove('open');
                            closeDescendants(sib);
                        }
                    });

                    if (isOpen) {
                        /* Collapse — trim stack back to before this item */
                        var idx = -1;
                        for (var k = 0; k < stack.length; k++) {
                            if (stack[k].item === parentItem) { idx = k; break; }
                        }
                        if (idx !== -1) stack = stack.slice(0, idx);
                        parentItem.classList.remove('open');
                        closeDescendants(parentItem);
                    } else {
                        /* Open — push onto stack */
                        parentItem.classList.add('open');
                        stack.push({ label: link.textContent.trim(), item: parentItem });
                    }

                    renderBreadcrumb();
                });
            })(iconLinks[j]);
        }

        /* ── Resize ── */
        window.addEventListener('resize', function () {
            var was = isMobile;
            isMobile = window.innerWidth <= 1020;
            if (was && !isMobile) closeMenu();
        });

    });

})();