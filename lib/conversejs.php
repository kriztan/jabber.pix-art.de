<script>
    converse.initialize({
        bosh_service_url: 'https://xmpp.pix-art.de:65004/http-bind/',
        keepalive: true,
        default_domain: 'pix-art.de',
        domain_placeholder: 'pix-art.de',
        locked_domain: 'pix-art.de',
        message_carbons: true,
        muc_show_join_leave: false,
        roster_groups: false,
        show_chatstate_notifications: true,
        visible_toolbar_buttons: {
        	call: false,
        	clear: false,
        	emoticons: true,
    			toggle_occupants: true
        },
        blacklisted_plugins: [
            'converse-otr'
        ],
        show_controlbox_by_default: true
    });
</script>