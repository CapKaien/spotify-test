<div class="rect-container" style="width: 93%;">
    <div id="embed-iframe"></div>
</div>
<script src="https://open.spotify.com/embed/iframe-api/v1" defer></script>
<script>
    window.onSpotifyIframeApiReady = (IFrameAPI) => {
        const element = document.getElementById('embed-iframe');
        const options = {
            width: '100%',
            height: '160',
            uri: 'spotify:episode:1XbADXsDWuvv6lPo66lRYv?si=45a578a34b0241c0' // Specify the URI of the track you want to load
        };
        const callback = (EmbedController) => {
            // Load the track when the controller is ready
            EmbedController.loadUri(options.uri);

            // Optional: If you want to handle playButton clicks as well, you can keep the existing code
            document.querySelectorAll('.playButton').forEach(playButton => {
                playButton.addEventListener('click', () => {
                    EmbedController.loadUri(playButton.dataset.spotifyId);
                    EmbedController.play();
                    console.log('click')
                });
            });
        };
        IFrameAPI.createController(element, options, callback);
    };
</script>