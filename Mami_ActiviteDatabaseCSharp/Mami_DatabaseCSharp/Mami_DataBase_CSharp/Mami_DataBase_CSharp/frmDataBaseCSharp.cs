/*
 * Auteur            : Mami Francesco
 * Nom du projet     : Mami_dataBase_CSharp
 * But du projet     : Programme pemettant à l'utilisateur de visualiser 
 *                     des données contenues dans une base de données dans un serveur (EasyPHP) depuis C#
 * Date de création  : 06.10.2016
 * Version           : 1.0
 */
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Mami_DataBase_CSharp
{
    public partial class frmDataBaseCSharp : Form
    {
        public frmDataBaseCSharp()
        {
            InitializeComponent();
        }
        string[] listeRecherches = { "programme", "langageCode" };
        string rechercheActuelle = "";
        string[] programmes;
        string[] langagesCode;
        CSharpDB baseDonnee = new CSharpDB();
        private void btnConnexion_Click(object sender, EventArgs e)
        {
            if (baseDonnee.ConnexionBase())
            {
                btnConnexion.Visible = false;
                tsmConnexion.Enabled = false;
                btnInverserRecherche.Enabled = true;
                tsmInverserRecherche.Enabled = true;
                lbxRecherche.Enabled = true;
                lbxResultat.Enabled = true;
                lblFleche.Enabled = true;
                rechercheActuelle = listeRecherches[0];
                programmes = baseDonnee.GetProgrammes();
                langagesCode = baseDonnee.GetLangagesCode();
                btnInverserRecherche.PerformClick();
            }
        }

        private void btnInverserRecherche_Click(object sender, EventArgs e)
        {
            if (true)
            {
                if (rechercheActuelle == listeRecherches[0])
                {
                    lbxRecherche.Items.Clear();
                    lbxResultat.Items.Clear();
                    foreach (string programme in programmes)
                    {
                        lbxRecherche.Items.Add(programme);
                    }
                    rechercheActuelle = listeRecherches[1];
                }
                else
                {
                    lbxRecherche.Items.Clear();
                    lbxResultat.Items.Clear();
                    foreach (string langageCode in langagesCode)
                    {
                        lbxRecherche.Items.Add(langageCode);
                    }
                    rechercheActuelle = listeRecherches[0];
                }
            }
        }

        private void tsmQuitter_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void lbxRecherche_SelectedIndexChanged(object sender, EventArgs e)
        {
            if (lbxRecherche.SelectedIndex >= 0)
            {
                lbxResultat.Items.Clear();
                /*l'inverse de ce qui est affiché dans la listeBox recherche doit figurer ici*/
                if (rechercheActuelle == listeRecherches[0])
                {
                    int indexLangageCodeSelectionne = baseDonnee.GetIndexProgrammeParNom(lbxRecherche.SelectedItem.ToString());
                    /*je souhaite récupérer le nom des programmes concernés grâce à l'identifiant du langage de code sélectionné afin de ne pas faire de tests en C#*/
                    string[] programmesConcernes = baseDonnee.GetProgrammesParIdLangageCode(indexLangageCodeSelectionne);
                    foreach (var programme in programmesConcernes)
                    {
                        lbxResultat.Items.Add(programme);
                    }
                }
                else /*étant donné que quand on inverse la recherche on met la valeur a 1 au depart c'est ce script qui demarre en premier */
                {
                    int indexProgrammeSelectionne = baseDonnee.GetIndexLangageCodeParAcronyme(lbxRecherche.SelectedItem.ToString());
                    /*je souhaite récupérer le nom des programmes concernés grâce à l'identifiant du langage de code sélectionné afin de ne pas faire de tests en C#*/
                    string[] langageCodeConcernes = baseDonnee.GetLangagesCodeParIdProgramme(indexProgrammeSelectionne);
                    foreach (var langageCode in langageCodeConcernes)
                    {
                        lbxResultat.Items.Add(langageCode);
                    }
                }
            }
        }
    }
}
