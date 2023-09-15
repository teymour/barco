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

def fig_save_or_show(fig, file):
    fig.update_layout(margin=dict(l=20, r=20, t=20, b=20))
    if is_notebook():
        fig.show()
    else:
        fig.write_html(os.path.dirname(os.path.realpath(__file__))+"/../web/generated/"+file+".html",include_plotlyjs=False)
