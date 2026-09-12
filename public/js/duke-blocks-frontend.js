const setupDukeVideo = function () {
	const videoElements = document.querySelectorAll('video');

	videoElements.forEach((video) => {
		const pauseButton = document.createElement('button');

		pauseButton.textContent = 'Pause';
		pauseButton.classList.add('play-pause-button');
		video.parentNode.insertBefore(pauseButton, video.nextSibling);

		// Create closed captions toggle button.
		// Only shown when the video has at least one <track kind="captions"> or <track kind="subtitles">.
		const tracks = Array.from(video.textTracks).filter(
			(t) => t.kind === 'captions' || t.kind === 'subtitles'
		);
		if (tracks.length > 0) {
			const ccButton = document.createElement('button');
			ccButton.textContent = 'Captions';
			ccButton.classList.add('cc-toggle-button');
			ccButton.setAttribute('aria-pressed', 'false');
			ccButton.setAttribute('aria-label', 'Toggle closed captions');
			video.parentNode.insertBefore(ccButton, pauseButton);

			// Start with captions hidden
			tracks.forEach((track) => {
				track.mode = 'hidden';
			});

			ccButton.addEventListener('click', function () {
				const isEnabled = ccButton.getAttribute('aria-pressed') === 'true';

				tracks.forEach((track) => {
					track.mode = isEnabled ? 'hidden' : 'showing';
				});

				ccButton.setAttribute('aria-pressed', String(!isEnabled));
				ccButton.classList.toggle('cc-enabled', !isEnabled);
				video.closest('.wp-block-duke-blocks-video')?.classList.toggle('cc-enabled', !isEnabled);
			});
		}

		video.onplaying = function (e) {
			pauseButton.textContent = 'Pause';
			pauseButton.classList.add('playing');
		};

		video.onpause = function (e) {
			pauseButton.textContent = 'Play';
			pauseButton.classList.remove('playing');
		};

		pauseButton.addEventListener('click', function () {
			if (video.paused) {
				video.play();
			} else {
				video.pause();
			}
		});

		//Kill autoplay if user has reduced motion enabled
		if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
			video.pause();
		}
	});
};

const lazyLoadVideos = function () {
	const lazyVideos = document.querySelectorAll('.lazy-load-video');

	if ('IntersectionObserver' in window) {
		const videoObserver = new IntersectionObserver((entries, observer) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					const video = entry.target;
					const videoSrc = video.getAttribute('data-src');
					if (videoSrc) {
						video.src = videoSrc;
						video.load(); // Required to start loading the new source


						// Only play if it was meant to autoplay
						if (video.hasAttribute('autoplay')) {
							const playPromise = video.play();
							if (playPromise !== undefined) {
								playPromise.catch(error => {
									// Auto-play was prevented
									// likely due to browser policy or user interaction settings
									console.log('Autoplay prevented:', error);
								});
							}
						}
					}
					if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
						video.pause();
					}
					video.classList.remove('lazy-load-video');
					observer.unobserve(video);
				}
			});
		});

		lazyVideos.forEach((video) => {
			videoObserver.observe(video);
		});
	} else {
		// Fallback or just load them
		lazyVideos.forEach((video) => {
			const videoSrc = video.getAttribute('data-src');
			if (videoSrc) {
				video.src = videoSrc;
			}
		});
	}
};

document.addEventListener('DOMContentLoaded', function () {
	lazyLoadVideos();
	setupDukeVideo();
});