# category_product

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `category_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_product_category_id_index` (`category_id`),
  KEY `category_product_product_id_index` (`product_id`),
  CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=[Redacted by tbls] DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

</details>

## Columns

| Name | Type | Default | Nullable | Extra Definition | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | --------------- | -------- | ------- | ------- |
| id | int(10) unsigned |  | false | auto_increment |  |  |  |
| category_id | int(10) unsigned |  | false |  |  | [categories](categories.md) |  |
| product_id | int(10) unsigned |  | false |  |  | [products](products.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| category_product_category_id_foreign | FOREIGN KEY | FOREIGN KEY (category_id) REFERENCES categories (id) |
| category_product_product_id_foreign | FOREIGN KEY | FOREIGN KEY (product_id) REFERENCES products (id) |
| PRIMARY | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| category_product_category_id_index | KEY category_product_category_id_index (category_id) USING BTREE |
| category_product_product_id_index | KEY category_product_product_id_index (product_id) USING BTREE |
| PRIMARY | PRIMARY KEY (id) USING BTREE |

## Relations

![er](category_product.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)