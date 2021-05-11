# public.product_category

## Description

Product Category

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('product_category_id_seq'::regclass) | false | [public.product_template](public.product_template.md) [public.product_category](public.product_category.md) [public.product_pricelist_item](public.product_pricelist_item.md) [public.stock_fixed_putaway_strat](public.stock_fixed_putaway_strat.md) [public.stock_inventory](public.stock_inventory.md) [public.stock_location_route_categ](public.stock_location_route_categ.md) |  |  |
| parent_path | varchar |  | true |  |  |  |
| name | varchar |  | false |  |  | Name |
| complete_name | varchar |  | true |  |  | Complete Name |
| parent_id | integer |  | true |  | [public.product_category](public.product_category.md) | Parent Category |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |
| removal_strategy_id | integer |  | true |  | [public.product_removal](public.product_removal.md) | Force Removal Strategy |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| product_category_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| product_category_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| product_category_parent_id_fkey | FOREIGN KEY | FOREIGN KEY (parent_id) REFERENCES product_category(id) ON DELETE CASCADE |
| product_category_pkey | PRIMARY KEY | PRIMARY KEY (id) |
| product_category_removal_strategy_id_fkey | FOREIGN KEY | FOREIGN KEY (removal_strategy_id) REFERENCES product_removal(id) ON DELETE SET NULL |

## Indexes

| Name | Definition |
| ---- | ---------- |
| product_category_pkey | CREATE UNIQUE INDEX product_category_pkey ON public.product_category USING btree (id) |
| product_category_name_index | CREATE INDEX product_category_name_index ON public.product_category USING btree (name) |
| product_category_parent_id_index | CREATE INDEX product_category_parent_id_index ON public.product_category USING btree (parent_id) |
| product_category_parent_path_index | CREATE INDEX product_category_parent_path_index ON public.product_category USING btree (parent_path) |

## Relations

![er](public.product_category.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)