$(document).ready(function() {
    /*function displayVideos()
    {
        $.get(
            "https://www.googleapis.com/youtube/v3/search",
            {
                part : 'snippet', 
                //channelId : 'UChYlvy_xAa7V1peYo5bhLfg',
                channelId : 'UCqLDDXfOK8HsyZLUbUEtMgg',
                type : 'video',
                order: 'date',
                key: 'AIzaSyCQWI4iSLS7dj5lANm2BPplztFxJPVFC2M',
                maxResults: 50
            },
            function(data) {
                var html = '';
                $.each(data.items, function(i, item) {
                    html += `
                        <div class="col-sm-4">
                            <a href="https://www.youtube.com/embed/${item.id.videoId}" class="card mt-3">
                                <img class="card-img-top" src="${item.snippet.thumbnails.high.url}" alt="${item.snippet.title}">
                                <div class="card-body">
                                    <h5 class="card-title">${item.snippet.title}</h5>
                                    <p class="card-text">${item.snippet.description}</p>
                                </div>
                            </a>
                        </div>
                    `;
                });
                $('.list').html(html);
            }
        );
    }*/

    $(document).on('click', '.card', function(event) {
        event.preventDefault();
        var link = $(this).attr('href');
        var html = '<iframe src="' + link + '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
        $('.player').html(html);
    })
});
