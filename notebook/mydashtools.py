import os

def is_notebook() -> bool:
    try:
        shell = str(type(get_ipython()))
        if shell:
            return True   # Jupyter notebook or qtconsole
        else:
            return False  # Other type (?)
    except NameError:
        return False      # Probably standard Python interpreter

def fig_save_or_show(fig, file, year = ''):
    fig.update_layout(margin=dict(l=20, r=20, t=20, b=20))
    if is_notebook():
        fig.show()
    else:
        if year:
            year += '_'
        fig.write_html(os.path.dirname(os.path.realpath(__file__))+"/../web/generated/%s%s.html" % (year, file),include_plotlyjs=False)

def true_or_html_to_file(table, file, year = ''):
    if is_notebook():
        return True
    else:
        if year:
            year += '_'
        with open(os.path.dirname(os.path.realpath(__file__))+"/../web/generated/%s%s.html" % (year, file), 'w') as fo:
           fo.write(table.to_html())
        return False
