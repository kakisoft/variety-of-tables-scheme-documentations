# public.product_template_attribute_line

## Description

Product Template Attribute Line

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('product_template_attribute_line_id_seq'::regclass) | false | [public.product_attribute_value_product_template_attribute_line_rel](public.product_attribute_value_product_template_attribute_line_rel.md) |  |  |
| product_tmpl_id | integer |  | false |  | [public.product_template](public.product_template.md) | Product Template |
| attribute_id | integer |  | false |  | [public.product_attribute](public.product_attribute.md) | Attribute |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| product_template_attribute_line_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| product_template_attribute_line_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| product_template_attribute_line_product_tmpl_id_fkey | FOREIGN KEY | FOREIGN KEY (product_tmpl_id) REFERENCES product_template(id) ON DELETE CASCADE |
| product_template_attribute_line_attribute_id_fkey | FOREIGN KEY | FOREIGN KEY (attribute_id) REFERENCES product_attribute(id) ON DELETE RESTRICT |
| product_template_attribute_line_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| product_template_attribute_line_pkey | CREATE UNIQUE INDEX product_template_attribute_line_pkey ON public.product_template_attribute_line USING btree (id) |
| product_template_attribute_line_product_tmpl_id_index | CREATE INDEX product_template_attribute_line_product_tmpl_id_index ON public.product_template_attribute_line USING btree (product_tmpl_id) |
| product_template_attribute_line_attribute_id_index | CREATE INDEX product_template_attribute_line_attribute_id_index ON public.product_template_attribute_line USING btree (attribute_id) |

## Relations

![er](public.product_template_attribute_line.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)