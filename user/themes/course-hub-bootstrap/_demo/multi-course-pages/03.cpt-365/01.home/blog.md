---
title: CPT 365 Home
blog_url: cpt-365
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
    limit: 14
    pagination: true

feed:
    description: Course Hub Description
    limit: 10

pagination: true
---
