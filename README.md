# CuteLinkNames

*A simple class that converts your URLs to link names ✨*


## 👀 Overview

![Link Name Convertor Snippet](php-link-name-convertor.png)


# 🎨 Example

```php
use PH7\Link\Name;

require_once 'vendor/autoload.php';

$url = 'http://ph7.me';
?>

<p>
<a
  href="<?= $url ?>"
  alt="<?= Name::parse($url) ?>"
>
  <!-- Ph7 -->
  <?= Name::parse($url) ?>
</a>
</p>
```


## ⚙️ Requirements

* [PHP v7.3](https://www.php.net/releases/7_3_0.php) or newer 🚀


## 📖 Installation

```bash
composer require ph-7/cute-link-names
```


## 🧑‍🍳 Author

Heyllo 🎉, I'm **[Pierre-Henry Soria](https://ph7.me)**. A **passionate software engineer** based in Adelaide, SA, Australia 🌴

[![Pierre-Henry Soria](https://s.gravatar.com/avatar/a210fe61253c43c869d71eaed0e90149?s=200)](https://ph7.me 'Pierre-Henry Soria resume')

[![@phenrysay][x-badge]](https://x.com/phenrysay "Follow Me on X") [![@pH7Programming][yt-badge]](https://www.youtube.com/@pH7Programming/videos "YouTube Tech Videos") [![pH-7][github-badge]](https://github.com/pH-7 "My GitHub profile")


## Full video 📺 Me building this library 🔥

[![Watch the video][video-thumbnail]](https://www.youtube.com/watch?v=TgwfrkfXmj0)

👉 **[Click here to watch on YouTube](https://www.youtube.com/watch?v=TgwfrkfXmj0)**


## ⚖️ License

Distributed under [MIT](https://github.com/pH-7/CuteLinkNames/blob/main/LICENSE.md) license 🎉


<!-- GitHub's Markdown reference links -->
[x-badge]: https://img.shields.io/badge/X-000000?style=for-the-badge&logo=x&logoColor=white
[yt-badge]: https://img.shields.io/badge/YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white
[github-badge]: https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white
[video-thumbnail]: https://i1.ytimg.com/vi/TgwfrkfXmj0/sddefault.jpg
