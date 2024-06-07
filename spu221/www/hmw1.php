<?php

// Строка JSON-ответа от Bing Search API
$jsonResponse = '{
  "_type": "SearchResponse",
  "queryContext": {
    "originalQuery": "itstep"
  },
  "webPages": {
    "webSearchUrl": "https://www.bing.com/search?q=itstep",
    "totalEstimatedMatches": 34600,
    "value": [
      {
        "id": "https://api.bing.microsoft.com/api/v7/#WebPages.0",
        "name": "Софтуерна академия в София | IT STEP",
        "url": "https://itstep.bg/",
        "isFamilyFriendly": true,
        "displayUrl": "https://itstep.bg",
        "snippet": "Софтуерна академия ☆ it step ☆ предлага качествено обучение и практически умения Направи своя старт в it сферата още сега. За повече информация посетете сайта или на ☎0899 945 847",
        "deepLinks": [
          {
            "name": "Събития",
            "url": "https://itstep.bg/events",
            "snippet": "Всички курсове, предстоящи събития и обучения от ☆ it step Академия ☆ За повече информация посетете сайта или се обадете на ☎02/494-22-50"
          },
          {
            "name": "Блог",
            "url": "https://itstep.bg/category/blog-bg",
            "snippet": "Следете блога на Компютърна академия ☆ it step ☆ Новини, статии и полезни съвети за развитие в сферата на технологиите За повече информация посетете сайта или се обадете на ☎02/494-22-50"
          }
        ]
      }
    ]
  }
}';

$jsonResponse = str_replace(['&#xD;&#xA;', '&quot;'], ["\r\n", '"'], $jsonResponse);

$data = json_decode($jsonResponse, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="/styleCSS/styles.css">
</head>
<body>
    <div class="text-center">
        <h1 class="display-4">Searching services. Bing</h1>
    </div>

    <?php if (!empty($data['webPages']['value'])) { ?>
        <div class="web-results">
            <?php foreach ($data['webPages']['value'] as $item) { ?>
                <div class="web-result">
                    <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                    <p><?php echo htmlspecialchars($item['snippet']); ?></p>
                    <a href="<?php echo htmlspecialchars($item['url']); ?>">Read more</a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="no-results">
            <p>No results found.</p>
        </div>
    <?php } ?>
</body>
</html>
