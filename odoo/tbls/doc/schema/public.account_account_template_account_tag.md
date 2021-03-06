# public.account_account_template_account_tag

## Description

RELATION BETWEEN account_account_template AND account_account_tag

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| account_account_template_id | integer |  | false |  | [public.account_account_template](public.account_account_template.md) |  |
| account_account_tag_id | integer |  | false |  | [public.account_account_tag](public.account_account_tag.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| account_account_template_account_ta_account_account_tag_id_fkey | FOREIGN KEY | FOREIGN KEY (account_account_tag_id) REFERENCES account_account_tag(id) ON DELETE CASCADE |
| account_account_template_accou_account_account_template_id_fkey | FOREIGN KEY | FOREIGN KEY (account_account_template_id) REFERENCES account_account_template(id) ON DELETE CASCADE |
| account_account_template_acco_account_account_template_id_a_key | UNIQUE | UNIQUE (account_account_template_id, account_account_tag_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| account_account_template_acco_account_account_template_id_a_key | CREATE UNIQUE INDEX account_account_template_acco_account_account_template_id_a_key ON public.account_account_template_account_tag USING btree (account_account_template_id, account_account_tag_id) |
| account_account_template_accoun_account_account_template_id_idx | CREATE INDEX account_account_template_accoun_account_account_template_id_idx ON public.account_account_template_account_tag USING btree (account_account_template_id) |
| account_account_template_account_tag_account_account_tag_id_idx | CREATE INDEX account_account_template_account_tag_account_account_tag_id_idx ON public.account_account_template_account_tag USING btree (account_account_tag_id) |

## Relations

![er](public.account_account_template_account_tag.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
