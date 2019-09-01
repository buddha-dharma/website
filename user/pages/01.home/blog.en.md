---
title: Online Dharma Practice
blog_url: home
body_classes: header-image fullwidth
child_type: item

sitemap:
    changefreq: monthly
    priority: 1.03

modular_content:
    items: '@self.modular'
    order:
        by: folder
        dir: desc

content:
    items: '@self.children'
    order:
        by: date
        dir: desc
    limit: 0

feed:
    description: The Buddha-Dharma website is an open source project promoting and organizing an open sangha.
    limit: 10

pagination: false

metadata:
    'twitter:card' : summary
    'twitter:site' : @global_dharma
    'twitter:title' : Buddha Dharma
    'twitter:description' : The Buddha-Dharma website is an open source project promoting and organizing an open sangha.
    'twitter:image': full_URL_to_headerimage_file
---
