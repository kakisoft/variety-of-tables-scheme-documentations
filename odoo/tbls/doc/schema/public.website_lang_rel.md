# public.website_lang_rel

## Description

RELATION BETWEEN website AND res_lang

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| website_id | integer |  | false |  | [public.website](public.website.md) |  |
| lang_id | integer |  | false |  | [public.res_lang](public.res_lang.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| website_lang_rel_lang_id_fkey | FOREIGN KEY | FOREIGN KEY (lang_id) REFERENCES res_lang(id) ON DELETE CASCADE |
| website_lang_rel_website_id_fkey | FOREIGN KEY | FOREIGN KEY (website_id) REFERENCES website(id) ON DELETE CASCADE |
| website_lang_rel_website_id_lang_id_key | UNIQUE | UNIQUE (website_id, lang_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| website_lang_rel_website_id_lang_id_key | CREATE UNIQUE INDEX website_lang_rel_website_id_lang_id_key ON public.website_lang_rel USING btree (website_id, lang_id) |
| website_lang_rel_website_id_idx | CREATE INDEX website_lang_rel_website_id_idx ON public.website_lang_rel USING btree (website_id) |
| website_lang_rel_lang_id_idx | CREATE INDEX website_lang_rel_lang_id_idx ON public.website_lang_rel USING btree (lang_id) |

## Relations

![er](public.website_lang_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)