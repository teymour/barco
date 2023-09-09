import json
import sys
from datetime import datetime, timedelta
import pandas as pd

zeltyfile = sys.argv[1];

converted = []

with open(zeltyfile) as f:
    zeltydata = json.load(f)
    for o in zeltydata['orders']:
        for i in o['items']:
            date = datetime.fromisoformat(o['closed_at']) - timedelta(hours=4)
            converted.append([date.strftime('%Y-%m-%d'), o['uuid'], i['name'].replace(';', ' ').replace(',', ' '), i['price']['final_amount_inc_tax'] / 100])

z = pd.DataFrame(converted, columns=['date', 'order uuid', 'produit', 'price'])
p2t = pd.read_csv("produit2type.csv", sep=';').set_index('produit')['type'].to_dict()
z['type'] = z['produit'].map(p2t)
print(z.to_csv(index=False, sep=';', decimal=','))
