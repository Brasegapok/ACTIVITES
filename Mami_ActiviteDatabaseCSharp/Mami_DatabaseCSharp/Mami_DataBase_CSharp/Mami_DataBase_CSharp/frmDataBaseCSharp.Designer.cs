namespace Mami_DataBase_CSharp
{
    partial class frmDataBaseCSharp
    {
        /// <summary>
        /// Variable nécessaire au concepteur.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Nettoyage des ressources utilisées.
        /// </summary>
        /// <param name="disposing">true si les ressources managées doivent être supprimées ; sinon, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Code généré par le Concepteur Windows Form

        /// <summary>
        /// Méthode requise pour la prise en charge du concepteur - ne modifiez pas
        /// le contenu de cette méthode avec l'éditeur de code.
        /// </summary>
        private void InitializeComponent()
        {
            this.lbxRecherche = new System.Windows.Forms.ListBox();
            this.btnInverserRecherche = new System.Windows.Forms.Button();
            this.lblFleche = new System.Windows.Forms.Label();
            this.msMain = new System.Windows.Forms.MenuStrip();
            this.tsmOption = new System.Windows.Forms.ToolStripMenuItem();
            this.tsmConnexion = new System.Windows.Forms.ToolStripMenuItem();
            this.tsmInverserRecherche = new System.Windows.Forms.ToolStripMenuItem();
            this.tssSeparateur = new System.Windows.Forms.ToolStripSeparator();
            this.tsmQuitter = new System.Windows.Forms.ToolStripMenuItem();
            this.aideToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.tsmApropos = new System.Windows.Forms.ToolStripMenuItem();
            this.lblIndications = new System.Windows.Forms.Label();
            this.btnConnexion = new System.Windows.Forms.Button();
            this.lbxResultat = new System.Windows.Forms.ListBox();
            this.msMain.SuspendLayout();
            this.SuspendLayout();
            // 
            // lbxRecherche
            // 
            this.lbxRecherche.Enabled = false;
            this.lbxRecherche.FormattingEnabled = true;
            this.lbxRecherche.Location = new System.Drawing.Point(12, 84);
            this.lbxRecherche.Name = "lbxRecherche";
            this.lbxRecherche.Size = new System.Drawing.Size(182, 212);
            this.lbxRecherche.TabIndex = 3;
            this.lbxRecherche.SelectedIndexChanged += new System.EventHandler(this.lbxRecherche_SelectedIndexChanged);
            // 
            // btnInverserRecherche
            // 
            this.btnInverserRecherche.Enabled = false;
            this.btnInverserRecherche.Location = new System.Drawing.Point(413, 163);
            this.btnInverserRecherche.Name = "btnInverserRecherche";
            this.btnInverserRecherche.Size = new System.Drawing.Size(91, 46);
            this.btnInverserRecherche.TabIndex = 6;
            this.btnInverserRecherche.Text = "Inverser la recherche";
            this.btnInverserRecherche.UseVisualStyleBackColor = true;
            this.btnInverserRecherche.Click += new System.EventHandler(this.btnInverserRecherche_Click);
            // 
            // lblFleche
            // 
            this.lblFleche.AutoSize = true;
            this.lblFleche.Enabled = false;
            this.lblFleche.Font = new System.Drawing.Font("Microsoft Sans Serif", 20.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblFleche.Location = new System.Drawing.Point(195, 121);
            this.lblFleche.Name = "lblFleche";
            this.lblFleche.Size = new System.Drawing.Size(48, 31);
            this.lblFleche.TabIndex = 5;
            this.lblFleche.Text = "=>";
            // 
            // msMain
            // 
            this.msMain.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.tsmOption,
            this.aideToolStripMenuItem});
            this.msMain.Location = new System.Drawing.Point(0, 0);
            this.msMain.Name = "msMain";
            this.msMain.Size = new System.Drawing.Size(510, 24);
            this.msMain.TabIndex = 0;
            this.msMain.Text = "menuStrip1";
            // 
            // tsmOption
            // 
            this.tsmOption.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.tsmConnexion,
            this.tsmInverserRecherche,
            this.tssSeparateur,
            this.tsmQuitter});
            this.tsmOption.Name = "tsmOption";
            this.tsmOption.Size = new System.Drawing.Size(61, 20);
            this.tsmOption.Text = "&Options";
            // 
            // tsmConnexion
            // 
            this.tsmConnexion.Name = "tsmConnexion";
            this.tsmConnexion.Size = new System.Drawing.Size(243, 22);
            this.tsmConnexion.Text = "Connexion à la base de données";
            this.tsmConnexion.Click += new System.EventHandler(this.btnConnexion_Click);
            // 
            // tsmInverserRecherche
            // 
            this.tsmInverserRecherche.Enabled = false;
            this.tsmInverserRecherche.Name = "tsmInverserRecherche";
            this.tsmInverserRecherche.Size = new System.Drawing.Size(243, 22);
            this.tsmInverserRecherche.Text = "Inverser la recherche";
            this.tsmInverserRecherche.Click += new System.EventHandler(this.btnInverserRecherche_Click);
            // 
            // tssSeparateur
            // 
            this.tssSeparateur.Name = "tssSeparateur";
            this.tssSeparateur.Size = new System.Drawing.Size(240, 6);
            // 
            // tsmQuitter
            // 
            this.tsmQuitter.Name = "tsmQuitter";
            this.tsmQuitter.Size = new System.Drawing.Size(243, 22);
            this.tsmQuitter.Text = "Quitter";
            this.tsmQuitter.Click += new System.EventHandler(this.tsmQuitter_Click);
            // 
            // aideToolStripMenuItem
            // 
            this.aideToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.tsmApropos});
            this.aideToolStripMenuItem.Name = "aideToolStripMenuItem";
            this.aideToolStripMenuItem.Size = new System.Drawing.Size(24, 20);
            this.aideToolStripMenuItem.Text = "&?";
            // 
            // tsmApropos
            // 
            this.tsmApropos.Name = "tsmApropos";
            this.tsmApropos.Size = new System.Drawing.Size(122, 22);
            this.tsmApropos.Text = "&A propos";
            // 
            // lblIndications
            // 
            this.lblIndications.AutoSize = true;
            this.lblIndications.Location = new System.Drawing.Point(12, 30);
            this.lblIndications.Name = "lblIndications";
            this.lblIndications.Size = new System.Drawing.Size(492, 13);
            this.lblIndications.TabIndex = 1;
            this.lblIndications.Text = "Cette application est liée à la base de données \"csharp_db\", prière de démarrer v" +
    "otre serveur avec elle";
            // 
            // btnConnexion
            // 
            this.btnConnexion.Location = new System.Drawing.Point(12, 55);
            this.btnConnexion.Name = "btnConnexion";
            this.btnConnexion.Size = new System.Drawing.Size(492, 23);
            this.btnConnexion.TabIndex = 2;
            this.btnConnexion.Text = "Connexion à la base de données";
            this.btnConnexion.UseVisualStyleBackColor = true;
            this.btnConnexion.Click += new System.EventHandler(this.btnConnexion_Click);
            // 
            // lbxResultat
            // 
            this.lbxResultat.Enabled = false;
            this.lbxResultat.FormattingEnabled = true;
            this.lbxResultat.Location = new System.Drawing.Point(249, 84);
            this.lbxResultat.Name = "lbxResultat";
            this.lbxResultat.Size = new System.Drawing.Size(158, 212);
            this.lbxResultat.TabIndex = 7;
            // 
            // frmDataBaseCSharp
            // 
            this.AcceptButton = this.btnConnexion;
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(510, 308);
            this.Controls.Add(this.lbxResultat);
            this.Controls.Add(this.btnConnexion);
            this.Controls.Add(this.lblIndications);
            this.Controls.Add(this.lblFleche);
            this.Controls.Add(this.btnInverserRecherche);
            this.Controls.Add(this.lbxRecherche);
            this.Controls.Add(this.msMain);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.Fixed3D;
            this.MainMenuStrip = this.msMain;
            this.MaximizeBox = false;
            this.Name = "frmDataBaseCSharp";
            this.Text = "Mami_DataBase_CSarp";
            this.msMain.ResumeLayout(false);
            this.msMain.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.ListBox lbxRecherche;
        private System.Windows.Forms.Button btnInverserRecherche;
        private System.Windows.Forms.Label lblFleche;
        private System.Windows.Forms.MenuStrip msMain;
        private System.Windows.Forms.ToolStripMenuItem tsmOption;
        private System.Windows.Forms.ToolStripMenuItem tsmInverserRecherche;
        private System.Windows.Forms.ToolStripSeparator tssSeparateur;
        private System.Windows.Forms.ToolStripMenuItem tsmQuitter;
        private System.Windows.Forms.ToolStripMenuItem aideToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem tsmApropos;
        private System.Windows.Forms.Label lblIndications;
        private System.Windows.Forms.Button btnConnexion;
        private System.Windows.Forms.ToolStripMenuItem tsmConnexion;
        private System.Windows.Forms.ListBox lbxResultat;

    }
}

